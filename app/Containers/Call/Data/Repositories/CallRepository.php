<?php

namespace App\Containers\Call\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CallRepository
 */
class CallRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'user_from_id' => '=',
        'user_to_id' => '=',
        'rdv_id' => '=',
        // ...
    ];

}
