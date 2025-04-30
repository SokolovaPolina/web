<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Page;

/*
 *   PageController Class, наследованный от класса Controller
 */
class PageController extends Controller
{
    /**
 * @param protected $pages - массив страниц
 * public $title- заголовок
 */
 
    public $title;
    protected $pages = [
        1 => ['title' => 'Страница 1', 'text' => 'Текст страницы 1'],
        2 => ['title' => 'Страница 2', 'text' => 'Текст страницы 2'],
        3 => ['title' => 'Страница 3', 'text' => 'Текст страницы 3']
    ];
 /*
 * Функция показа страницы
 */   
    public function show1()
    {
        echo '1';
    }
/*
 * Функция показа страницы
 */
    public function show2()
    {
        echo '2';
    }
    
    /*
 * Функция показа страниц
 * @return $pageData - страница
 */
    public function show($id)
    {
        if (!isset($this->pages[$id])) {
            throw new Exception("Запрашиваемая страница не найдена");
        }
        
        // Получаем нужную страницу
        $pageData = $this->pages[$id];
        
        // Устанавливаем заголовок страницы
        $this->title = $pageData['title'];
        
        // Рендерим представление с передачей текста страницы
        return $this->render('page/show', [
            'text' => $pageData['text']
        ]);
    }
    
    public function test() {
			$page = new Page; // создаем объект модели
		
			$data = $page->getById(3); // получим запись с id=3
			var_dump($data);
			
			$data = $page->getById(5); // получим запись с id=5
			var_dump($data);
			
			$data = $page->getByRange(2, 5); // записи с id от 2 до 5
			var_dump($data);
		}
		
	public function one($params)
		{
			$page = (new Page) -> getById($params['id']);
			
			$this->title = $page['title'];
			return $this->render('page/one', [
				'text' => $page['text'],
				'h1' => $this->title
			]);
		}
		
		public function all()
		{
			$this->title = 'Список всех страниц';
			
			$pages = (new Page) -> getAll();
			return $this->render('page/all', [
				'pages' => $pages,
				'h1' => $this->title
			]);
		}	
    
}