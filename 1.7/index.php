<?php 

require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

$rules = array('email'=>'required|email','password'=>'required|min:8');
$data = array('email'=>'peter@jiexi-it.com','password'=>'12345678','foo'=>'bar');

$validator = new Validator();
if ($validator->validate($data, $rules) == true) {
    $peter = new User($data);
    $peter->email = 'peter123@jiexi-it.com';
    $peter->password = 'abcsdfasdfadsf';
 /*   var_dump($peter->email);
    var_dump($peter->password);
    var_dump($peter);*/
    echo $peter;
}
else {
    var_dump($validator->getErrors());
}


 ?>