<?php 

require 'user.php';
define('MINCHARS',8);

$peter = new User();

$peter->setEmail('peter@jiexi-it.com');

$sam = clone $peter;
$sam->setEmail('sam@jiexi-it.com');
$peter->setEmail('peter1@jiexi-it.com');
$sam->setPassword('12345678');
$peter->setPassword('87654321');

var_dump($peter);
echo '<br>';
var_dump($sam);
echo '<br>';


 ?>