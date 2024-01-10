<?php

namespace App\Containers\Medecine\Tasks;

use App\Containers\Medecine\Data\Repositories\MedecineRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllMedecinesTask extends Task
{

    protected $repository;

    public function __construct(MedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
