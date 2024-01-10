<?php

namespace App\Containers\CenterOffers\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CenterOffersRepository
 */
class CenterOffersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'center_id' => '=',
        // ...
    ];

}
