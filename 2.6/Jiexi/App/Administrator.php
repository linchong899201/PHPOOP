<?php 

namespace Jiexi\App;


class Administrator extends User
{
	public function __construct(Array $params=array()){
		parent::__construct($params);
		$this->isAdmin = true;
	}

	public function login()
	{
		return '要做一些处理' . '登陆方法来自于administrator类';
	}
	
}


 ?>