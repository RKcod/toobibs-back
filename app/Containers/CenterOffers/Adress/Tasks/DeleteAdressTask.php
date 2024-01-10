<?php

namespace App\Containers\AppSection\Adress\Tasks;

use App\Containers\AppSection\Adress\Data\Repositories\AdressRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteAdressTask extends Task
{
    protected AdressRepository $repository;

    public function __construct(AdressRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id): ?int
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
