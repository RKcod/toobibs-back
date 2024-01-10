<?php

namespace App\Containers\Prescription\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PrescriptionRepository
 */
class PrescriptionRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
