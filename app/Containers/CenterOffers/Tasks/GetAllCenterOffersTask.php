<?php

namespace App\Containers\CenterOffers\Tasks;

use App\Containers\CenterOffers\Data\Repositories\CenterOffersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCenterOffersTask extends Task
{

    protected $repository;

    public function __construct(CenterOffersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
