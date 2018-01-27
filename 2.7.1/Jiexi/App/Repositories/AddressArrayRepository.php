<?php 

namespace Jiexi\App\Repositories;

class AddressArrayRepository implements AddressRepositoryInterface
{
	protected $addresses;

	public function __construct()
	{
		//设置类
		$this->addresses = $this->getAddresses();
	}

	public function Find($id, \Jiexi\App\Address $address)
	{
		//TODO:自动生成方法存根
		if (isset($this->addresses[$id])) {
			foreach ($this->addresses[$id] as $key => $value) {
				$address->$key = $value;
			}
		}

		//设置成功就返回
		return $address;
	}

	protected function getAddresses()
	{
		return array(
			1=>array(
				'street'=>'1 Capital Hill',
				'city'=>'Washington',
			),
			2=>array(
				'street'=>'1 Euston Road',
				'city'=>'Washington',
			),

			3=>array(
				'street'=>'Dam 1',
				'city'=>'Amsterdam',
			)
		);
	}
} 


 ?>
