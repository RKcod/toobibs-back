<?php

namespace App\Containers\Call\Tasks;

use App\Containers\Call\Data\Repositories\CallRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCallTask extends Task
{

    protected $repository;

    public function __construct(CallRepository $repository)
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
