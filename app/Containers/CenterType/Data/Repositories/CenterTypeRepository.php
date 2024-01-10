<?php

namespace App\Containers\CenterType\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CenterTypeRepository
 */
class CenterTypeRepository extends Repository
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
