<?php 

namespace Jiexi\App;

use Jiexi\App\Repositories\AddressRepositoryInterface;

class Address
{

	use \Jiexi\App\Traits\Accessible;

	protected $street;
	protected $city;
	protected $addressRepository;

	public function __construct(AddressRepositoryInterface $addressRepository )
	{
		$this->addressRepository = $addressRepository;
		$this->fillable[]='stree';
		$this->fillable[]='city';
		$this->accessible[]='stree';
		$this->accessible[]='city';
	}

	public function Find($id)
	{
		$result = $this->addressRepository->Find($id);

		foreach ($result as $key => $value) {
			$this->$key = $value;
		}
		return $this;
	}
}

 ?>