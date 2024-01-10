<?php

namespace App\Containers\Speciality\Tasks;

use App\Containers\Speciality\Data\Repositories\SpecialityRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSpecialitiesTask extends Task
{

    protected $repository;

    public function __construct(SpecialityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
