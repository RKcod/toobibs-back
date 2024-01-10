<?php

namespace App\Containers\Center\Tasks;

use App\Containers\Center\Data\Repositories\CenterRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCenterByIdTask extends Task
{

    protected $repository;

    public function __construct(CenterRepository $repository)
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
