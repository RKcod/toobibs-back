<?php

namespace App\Containers\Medecine\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MedecineRepository
 */
class MedecineRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name'=>'like',
        'type' => 'like',
        // ...
    ];

}
