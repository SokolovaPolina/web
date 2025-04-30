<?php
	namespace Project\Controllers;
	use \Core\Controller;
	use \Project\Models\Hello;
	
	/*
 *  HelloController Class, наследованный от класса Controller
 */
	class HelloController extends Controller
	{
	    /**
 * @param public $title - заголовок
 */
	    public $title;
	    
	    /*
 * Функция проверки работы сайта
 * @param $hello -- тестовая модель для проверки базы
 * @return  вызов ф-и
 */
		public function index() {
			$this->title = 'Приветствие';
			
			$hello = new Hello; // тестовая модель для проверки базы
			
			return $this->render('hello/index');
		}
	}
