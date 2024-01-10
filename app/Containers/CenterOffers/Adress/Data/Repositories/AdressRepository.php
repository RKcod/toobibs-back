<?php

namespace App\Containers\AppSection\Adress\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class AdressRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'doctor_id' => '=',
        'address' => '=',
        // ...
    ];
}
