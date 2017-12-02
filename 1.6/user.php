<?php 

class user{
	private $email;
	private $password;
	const MINCHARS=8;

	public function login(){
		return '登录……';
	}

	public function logout(){
		return '登出……';
	}

	public function setPassword($string){
		//if (strlen($string < self::MINCHARS)) {
		if ($this->validatePassword($string)==false) {
			throw new exception('密码至少要' . self::MINCHARS . '个字符');
		}

		$this->password=hash('sha256',$string);
	}

	public function getPassword(){
		return $this->password;
	}

	public function setEmail($string){
		if (! filter_var($string,FILTER_VALIDATE_EMAIL)) {
			throw new exception('请输入正确的邮箱地址');
		}

		$this->email = $string;

	}

	public function getEmail(){
		return $this->email;
	}

	private function validatePassword($string){
		return strlen($string) < self::MINCHARS ? false:true;
	}
}

 ?>