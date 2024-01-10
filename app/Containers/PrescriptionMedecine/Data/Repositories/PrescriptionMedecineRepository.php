<?php

namespace App\Containers\PrescriptionMedecine\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PrescriptionMedecineRepository
 */
class PrescriptionMedecineRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
