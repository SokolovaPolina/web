<?php
namespace Project\Controllers;
use \Core\Controller;

/*
 *  NumController Class, наследованный от класса Controller
 */
class NumController extends Controller
{
     /**
 * @param public $title - заголовок
 */
    public $title;
    
    /*
 * Функция подсчета суммы трех чисел
 * @param int $n1, $n2, $n3 - задаваемые числа 
 * @return сумма чисел $sum 
 */
    public function sum($params)
    {
        $this->title = 'Вычисления';
        if (isset($params['n1']) && isset($params['n2']) && isset($params['n3'])) {
            
			$n1 = (int)$params['n1'];
			$n2 = (int)$params['n2'];
			$n3 = (int)$params['n3'];
			
			$sum = $n1 + $n2 + $n3;
			
			return $this->render('num/sum', [
				'n1' => $n1,
				'n2' => $n2,
				'n3' => $n3,
				'sum' => $sum
			]);
        } else {
            echo "Ошибка: не все параметры переданы";
        }
    }
}