<?php 

namespace Jiexi\App\Repositories;

/**
* 在PostDataRepository实现PostRepositoryInterface接口
*/
class PostDataRepository implements PostRepositoryInterface
{
	protected $db = array();
	
	function __construct()
	{
		//设置数据库链接信息
	}

	public function All()
	{
		//从数据库中获取posts表里面所有内容
	}

	public function Find($id)
	{
		//从数据库获取单条post表的数据
	}
}

 ?>