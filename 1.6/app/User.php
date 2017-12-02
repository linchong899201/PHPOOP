<?php 

class User{
	private $email;
	private $password;

	public function login(){
		return '登录……';
	}
	public function logout(){
		return '登出……';
	}
	public function setPassword($string){
		$this->password = $string;
		return $this;
	}
	public function getPassword(){
		return $this->password;
	}
	public function setEmail($string){
		$this->email = $string;
		return $this;
	}
	public function getEmail(){
		return $this->email;
	}
}
 ?>