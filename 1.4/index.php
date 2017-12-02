<?php 

require 'user.php';
define('MINCHARS',8);

$peter = new User();

$peter->setPassword('1234');
//$peter->setEmail('peter@jiexi-it.com');

var_dump($peter->getPassword());
//var_dump($peter->getEmail());

 ?>