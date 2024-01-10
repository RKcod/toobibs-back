<?php

namespace App\Containers\Speciality\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SpecialityRepository
 */
class SpecialityRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => '=',
        // ...
    ];

}
