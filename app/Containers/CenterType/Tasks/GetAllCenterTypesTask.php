<?php

namespace App\Containers\CenterType\Tasks;

use App\Containers\CenterType\Data\Repositories\CenterTypeRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCenterTypesTask extends Task
{

    protected $repository;

    public function __construct(CenterTypeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
