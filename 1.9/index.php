<?php 

require 'App/Helper.php';
require 'App/User.php';
require 'App/Validator.php';
require 'Library/User.php';

$rules = array('email'=>'required|email','password'=>'required|min:8');
$data = array('email'=>'peter@jiexi-it.com','password'=>'12345678','foo'=>'bar');

$validator = new Validator();
if ($validator->validate($data, $rules) == true) {
    //validation 通过，设置user values
    $peter = new User($data);

    var_dump($peter);

    $sam = new Library\User();

    var_dump($sam);
}
else {
    var_dump($validator->getErrors());
}


 ?>