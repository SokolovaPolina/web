<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class ErrorController extends Controller
	{
	    public $title = "Ошибка";
		public function notFound() {
			$this->title = 'Страница не найдена';
			
			return $this->render('error/notFound');
		}
	}
