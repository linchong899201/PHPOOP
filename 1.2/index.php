<?php 

require 'user.php';

$peter = new User();
$peter->email = 'peter@jiexi-it.com';
$peter->password = '111111';

$sam = new User();
$sam->email = 'sam@jiexi-it.com';
$sam->password = '222222';


var_dump($sam->login());

 ?>