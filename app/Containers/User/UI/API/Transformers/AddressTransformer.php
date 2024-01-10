<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\User\Models\Address;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

class AddressTransformer extends Transformer
{

  /**
   * @var  array
   */
  protected $availableIncludes = [

  ];

  /**
   * @var  array
   */
  protected $defaultIncludes = [
  ];

  /**
   * @param \App\Containers\User\Models\Address $address
   *
   * @return array
   */
  public function transform(Address $address)
  {
    $response = [
      'object' => 'User',
      'id' => $address->getHashedKey(),
      'real_id' => $address->id,
      'address' => $address->address,
      'doctor_id' => $address->doctor_id,
    ];

    $response = $this->ifAdmin([
      'real_id' => $address->id,
      'deleted_at' => $address->deleted_at,
    ], $response);

    return $response;
  }

}
