<?php 

namespace Jiexi\Library;
use Jiexi\App\User as AnotherUser;

class User
{
	public function __construct()
	{	
		var_dump(new AnotherUser);
	}

	protected function login(){
		return '来自library下面user类的登录方法';
	}
}

 ?>