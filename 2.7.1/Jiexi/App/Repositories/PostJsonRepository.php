<?php 

namespace Jiexi\App\Repositories;

/**
* 在PostJsonRepository实现PostRepositoryInterface接口
*/
class PostJsonRepository implements PostRepositoryInterface
{
	protected $posts = array();
	
	function __construct()
	{
		$posts = json_decode(file_get_contents(dirname(__FILE__).'/posts.json'),true);
		foreach ($posts as $key => $post) {
			$this->posts[$key]=(object)$post;
		}
	}

	public function All()
	{
		return $this->posts;
	}

	public function Find($id)
	{
		return isset($this->posts[$id]) ? $this->posts[$id] : array();
	}
}

 ?>