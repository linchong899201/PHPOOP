<?php 

namespace Jiexi\App;

class User{
	Protected $email;
	Protected $password;
	Protected $fillable = array('email','password');
	Protected $accessible = array('email','password');
	protected $isAdmin = false;

	public function __construct(Array $params = array()){
		//类的配置、
		//条件语句，计算数组内的$params
		if (count($params)) {
			foreach ($params as $key => $value) {
				$this->$key = $value;
			}
		}
	}

    public function __set ($name, $value) {
        
        if (! in_array($name, $this->fillable)) {
            return false;
        }
        
        if (isset($this->$name)) {
            $this->$name = $value;
        }
    }

    public function __get ($name) {
        
        if (! in_array($name, $this->accessible)) {
            return NULL;
        }
        
        return isset($this->$name) ? $this->$name : NULL;
    }

    public function __toString () {
        
        $data = array();
        
        foreach ($this->accessible as $key) {
            $data[$key] = $this->$key;
        }
        
        return json_encode($data);
    }
    


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