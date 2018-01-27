<?php 

require 'autoload.php';

$rules = array('email'=>'required|email','password'=>'required|min:8');
$data = array('email'=>'peter@jiexi-it.com','password'=>'12345678','foo'=>'bar');

$validator = new Jiexi\App\Validator();
if ($validator->validate($data, $rules) == true) {
/*	$administrator =new Jiexi\App\Administrator();
	echo $administrator->login();*/

	$member =new Jiexi\App\Member();
	echo $member->login();
}
else {
    var_dump($validator->getErrors());
}


 ?>