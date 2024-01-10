<?php

namespace App\Containers\Appointment\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AppointmentRepository
 */
class AppointmentRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'date' => '=',
        'time' => '=',
        'users_id' => '=',
        'doctor_id' => '=',
        'status' => '=',
        'email' => '=',
        'phone' => '=',
        'first_name' => 'like',
        'last_name' => 'like',
        // ...
    ];

}
