<?php

namespace App\Containers\Call\Tasks;

use App\Containers\Call\Data\Repositories\CallRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCallTask extends Task
{

    protected $repository;

    public function __construct(CallRepository $repository)
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
