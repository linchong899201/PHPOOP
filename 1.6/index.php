<?php 

require 'app/Validator.php';
require 'app/Helper.php';
require 'app/User.php';

$rules = array('email'=>'required|email','password'=>'required|min:8');
$data = array('email'=>'peter@jiexi-it.com','password'=>'12345678');

$validator = new Validator();

$validator->validate($data,$rules);

if ($validator->validate($data,$rules)==true) {
	$peter = new User();
	$peter->setEmail($data['email'])
		->setPassword(getHash($data['password']));
	var_dump($peter);
}else{
	var_dump($validator->getErrors());
}


 ?>