<?php

namespace App\Containers\CenterOffers\Tasks;

use App\Containers\CenterOffers\Data\Repositories\CenterOffersRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCenterOffersTask extends Task
{

    protected $repository;

    public function __construct(CenterOffersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
