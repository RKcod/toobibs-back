<?php

namespace App\Containers\Center\Tasks;

use App\Containers\Center\Data\Repositories\CenterRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCenterTask extends Task
{

    protected $repository;

    public function __construct(CenterRepository $repository)
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
