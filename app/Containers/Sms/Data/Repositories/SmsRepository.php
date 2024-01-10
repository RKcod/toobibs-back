<?php

namespace App\Containers\Sms\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SmsRepository
 */
class SmsRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'doctor_id' => '='
        // ...
    ];

}
