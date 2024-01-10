<?php

namespace App\Containers\Call\Tasks;

use App\Containers\Call\Data\Repositories\CallRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCallByIdTask extends Task
{

    protected $repository;

    public function __construct(CallRepository $repository)
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
