<?php

namespace App\Containers\User\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AddressRepository extends Repository
{

  /**
   * @var array
   */
  protected $fieldSearchable = [
    'id'         => '=',
    'doctor_id' => '=',
  ];

}
