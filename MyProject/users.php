<?php
require 'Classes\User.php';
use MyProject\Classes\User;
use MyProject\Classes\SuperUser;

$user1 = new User('Jonh', 'jonh123', 'password1');
$user2 = new User('Niko', 'niko456', 'password2');
$user3 = new User('Anna', 'anna789', 'password3');

echo $user1->showInfo();
echo $user2->showInfo();
echo $user3->showInfo();

