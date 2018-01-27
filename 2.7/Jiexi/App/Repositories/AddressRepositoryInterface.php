<?php

namespace Jiexi\App\Repositories;

interface AddressRepositoryInterface
{

    public function Find($id, \Jiexi\App\Address $address);
}
