<?php

namespace App\Containers\Center\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CenterRepository
 */
class CenterRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => '=',
        'center_type_id' => '=',
        // ...
    ];

}
