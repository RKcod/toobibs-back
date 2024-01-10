<?php

namespace App\Containers\CenterType\Tasks;

use App\Containers\CenterType\Data\Repositories\CenterTypeRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteCenterTypeTask extends Task
{

    protected $repository;

    public function __construct(CenterTypeRepository $repository)
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
