<?php

namespace App\Containers\Prices\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PricesRepository
 */
class PricesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'doctor_id' => '=',
        // ...
    ];

}
