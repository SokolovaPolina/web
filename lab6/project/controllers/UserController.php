<?php
namespace Project\Controllers;
use \Core\Controller;

/*
 * UserController Class, наследованный от класса Controller
 */
class UserController extends Controller
{
    /**
 * @param private $users - массив пользователей с параметрами: имя, возраст, зарплата
    *      public $title - заголовок
 */
    private $users;
    public $title;
    
	public function __construct()
    {
        $this->users = [
            1 => ['name'=>'user1', 'age'=>'23', 'salary' => 1000],
            2 => ['name'=>'user2', 'age'=>'24', 'salary' => 2000],
            3 => ['name'=>'user3', 'age'=>'25', 'salary' => 3000],
            4 => ['name'=>'user4', 'age'=>'26', 'salary' => 4000],
            5 => ['name'=>'user5', 'age'=>'27', 'salary' => 5000],
        ];
    }
	
	/*
 * Функция вывода пользователя по определенному id
 * @param numeric $id
 * @return параметры пользоватетля $this->id, $this->name
 */
	public function show($params)
    {
        $id = $params['id'];
        $this->title = "Пользователь {$id}";
        if (isset($this->users[$id])) {
            $user = $this->users[$id];
            return $this->render('user/show', [
					'id' => $id,
					'user' => $user
				]);
			} else {
				return $this->render('error/index', [
					'sms' => 'Пользователь не найден'
				]);
			}
    }
    
    /*
 * Функция вывода требуемой информации о пользователе по определенному id
 * @param numeric $id, string $key
 * @return параметры пользоватетля $this->id, $this->key, $this->value
 */
    public function info($params)
    {
        $id = $params['id'];
        $this->title = "Информация о пользователе {$id}";
        $key = $params['key'];
        
        if (isset($this->users[$id]) && isset($this->users[$id][$key])) {
            
				$value = $this->users[$id][$key];
				
				return $this->render('user/info', [
					'id' => $id,
					'key' => $key,
					'value' => $value
				]);
			} else {
				return $this->render('error/index', [
					'sms' => 'Информация о пользователе не найдена'
				]);
			}
    }
    
    /*
 * Функция вывода всех пользователей и информации о них
  * @return параметры пользоватетля array users
 */
    public function all($params = [])  
    {
        $this->title = "Список пользователей";
        if (!empty($this->users)) {  
            return $this->render('user/all', [
				'users' => $this->users
			]);
            
        } else {
            return $this->render('error/index', [
					'sms' => 'Список пользователей пуст'
				]);
        }
    }

/*
 * Функция вывода первых n пользователей и информации о них
  * @return параметры пользоватетля array users
 */
    public function first($params)
    {
        $n = $params['n'];
        $this->title = "Первые {$n} пользователя";
        $result = array_slice($this->users, 0, $n, true);
        
       return $this->render('user/first', [
				'n' => $n,
				'users' => $result
			]);
    }

    
}