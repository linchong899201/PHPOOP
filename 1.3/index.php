<?php 

require 'user.php';
define('MINCHARS',8);

$peter = new User();
$peter->setPassword('12345678');

var_dump($peter);

 ?>