<?php

namespace App\Containers\Availability\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AvailabilityRepository
 */
class AvailabilityRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'date' => '=',
        'start_time' => '=',
        'end_time' => '=',
        'status' => '=',
        'users_id' => '=',
        // ...
    ];

}
