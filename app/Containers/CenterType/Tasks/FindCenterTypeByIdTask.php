<?php

namespace App\Containers\CenterType\Tasks;

use App\Containers\CenterType\Data\Repositories\CenterTypeRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCenterTypeByIdTask extends Task
{

    protected $repository;

    public function __construct(CenterTypeRepository $repository)
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
