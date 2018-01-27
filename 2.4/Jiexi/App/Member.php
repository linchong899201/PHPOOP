<?php 

namespace Jiexi\App;


class Member extends User
{
	public function __construct(){
		$this->isAdmin = true;
	}

	public function login()
	{
		$message = parent::login();
		return $message . '……在在线会员表中设置一个标志';
	}
	
}


 ?>