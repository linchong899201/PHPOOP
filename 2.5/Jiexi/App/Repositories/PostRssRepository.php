<?php 

namespace Jiexi\App\Repositories;

/**
* 在PostRssRepository实现PostRepositoryInterface接口
*/
class PostRssRepository implements PostRepositoryInterface
{
	protected $posts = array();
	
	function __construct()
	{
		$xml = simplexml_load_file(dirname(__FILE__).'/posts.xml');

		$posts = $xml->xpath('channel/item');
		foreach ($posts as $key => $post) {
            //json_encode把简单的XML对象变成JSON对象
            //再次运行json_decode为了得到一个正常的PHP类
			$post = json_decode(json_encode($post));
			$post->body = $post->description;
			//用unset方法销毁指定的变量
			unset($post->description);
			$this->posts[$key+1]=$post;

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