<?php 

class user{
	public $email;
	public $password;
	const MINCHARS=8;

	public function login(){
		return '登录……';
	}

	public function logout(){
		return '登出……';
	}

	public function setPassword($string){
		if (strlen($string < self::MINCHARS)) {
			throw new exception('密码至少要' . self::MINCHARS . '个字符');
		}

		$this->password=hash('sha256',$string);
	}
}

 ?>