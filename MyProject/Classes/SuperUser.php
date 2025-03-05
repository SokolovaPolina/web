<?php
declare(strict_types=1);
require_once('User.php');

/**
 * SuperUser, наследованный от класса User
 */
class SuperUser extends User{
    /**
* @param public $role - роль пользователя
*/
   public $role;
   
   // перегрузка конструкторa
   /*
* Функция конструктор
* @param string $name, string $login, string $password, string $role
* @return вывод св-в $this->name, $this->login, $this->password, $this->role
*/	
   function __construct($name, $login, $password, $role) {
       parent::__construct($name, $login, $password);   // перегрузка с выполнением родительского метода
       $this->role = $role;
   }
   
/*
* Функция вывода значение свойств класса
* @param string $name, string $login, string $password
* @return св-ва классов $this->name, $this->login, $this->password, $this->role
*/	       
   function showInfo(){
        echo "<p><b>name:</b> {$this->name} <b>login:</b> {$this->login} <b>password:</b> {$this->password} <b>role:</b> {$this->role} </p>";
   }    
}