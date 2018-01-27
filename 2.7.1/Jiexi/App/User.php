<?php 

namespace Jiexi\App;

abstract class User{

	use \Jiexi\App\Traits\Curlable;
	use \Jiexi\App\Traits\Accessible;

	protected $articleid;
	protected $email;
	protected $password;
	protected $isAdmin = false;

    public function getProperty(){

    }

	public function __construct(Array $params = array()){

		$this->fillable[] = 'email';
		$this->fillable[] = 'password';
		$this->fillable[] = 'articleid';
		$this->accessible[] = 'email';
		$this->accessible[] = 'password';
		$this->accessible[] = 'articleid';

		if (count($params)) {
			foreach ($params as $key => $value) {
				$this->$key = $value;
			}
		}
	}

    public function getArticalData ()
    {
        $url = 'http://www.jiexi-it.com/blog/' . $this->articleid;
        return $this->curl($url);
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