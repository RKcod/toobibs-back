<?php

namespace App\Containers\CenterOffers\Tasks;

use App\Containers\CenterOffers\Data\Repositories\CenterOffersRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCenterOffersTask extends Task
{

    protected $repository;

    public function __construct(CenterOffersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
