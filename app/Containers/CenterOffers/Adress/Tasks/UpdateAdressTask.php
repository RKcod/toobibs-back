<?php

namespace App\Containers\AppSection\Adress\Tasks;

use App\Containers\AppSection\Adress\Data\Repositories\AdressRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateAdressTask extends Task
{
    protected AdressRepository $repository;

    public function __construct(AdressRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
