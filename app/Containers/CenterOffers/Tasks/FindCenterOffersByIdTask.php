<?php

namespace App\Containers\CenterOffers\Tasks;

use App\Containers\CenterOffers\Data\Repositories\CenterOffersRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCenterOffersByIdTask extends Task
{

    protected $repository;

    public function __construct(CenterOffersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
