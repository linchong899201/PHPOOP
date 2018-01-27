<?php 

namespace Jiexi\App;

use Jiexi\Library\User;



class Administrator extends User
{
	public function __construct(){
		$this->isAdmin = true;
	}
		
	public function getLogin()
	{
		return $this->login();
	}

	
}


 ?>