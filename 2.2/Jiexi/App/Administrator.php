<?php 

namespace Jiexi\App;

class Administrator extends User
{
	public function __construct(){
		$this->isAdmin = true;
	}
		
	public function login(){
        $message = parent::login();
		return $message . '……记录管理员最后登陆的时间';
	}

}


 ?>