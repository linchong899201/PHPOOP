<?php 

namespace Peter\Library;
use Peter\App\User as AnotherUser;

class User
{
	public function __construct()
	{	
		var_dump(new AnotherUser);
	}
}

 ?>