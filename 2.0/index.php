<?php 

require 'autoload.php';

$rules = array('email'=>'required|email','password'=>'required|min:8');
$data = array('email'=>'peter@jiexi-it.com','password'=>'12345678','foo'=>'bar');

$validator = new Peter\App\Validator();
if ($validator->validate($data, $rules) == true) {
    //validation 通过，设置user values
    $peter = new Peter\App\User($data);

    var_dump($peter);

    $sam = new Peter\Library\User();

    var_dump($sam);
}
else {
    var_dump($validator->getErrors());
}


 ?>