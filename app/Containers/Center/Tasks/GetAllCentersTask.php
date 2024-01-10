<?php

namespace App\Containers\Center\Tasks;

use App\Containers\Center\Data\Repositories\CenterRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCentersTask extends Task
{

    protected $repository;

    public function __construct(CenterRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
