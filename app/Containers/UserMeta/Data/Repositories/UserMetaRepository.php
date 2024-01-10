<?php

namespace App\Containers\UserMeta\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class UserMetaRepository
 */
class UserMetaRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'doctor_id' => '=',
        'type' => '=',
        // ...
    ];

}
