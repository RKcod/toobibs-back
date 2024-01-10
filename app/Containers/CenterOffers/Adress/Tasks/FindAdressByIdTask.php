<?php

namespace App\Containers\AppSection\Adress\Tasks;

use App\Containers\AppSection\Adress\Data\Repositories\AdressRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindAdressByIdTask extends Task
{
    protected AdressRepository $repository;

    public function __construct(AdressRepository $repository)
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
