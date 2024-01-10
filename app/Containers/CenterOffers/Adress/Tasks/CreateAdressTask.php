<?php

namespace App\Containers\AppSection\Adress\Tasks;

use App\Containers\AppSection\Adress\Data\Repositories\AdressRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAdressTask extends Task
{
    protected AdressRepository $repository;

    public function __construct(AdressRepository $repository)
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
