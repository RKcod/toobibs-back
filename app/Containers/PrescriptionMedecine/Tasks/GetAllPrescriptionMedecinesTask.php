<?php

namespace App\Containers\PrescriptionMedecine\Tasks;

use App\Containers\PrescriptionMedecine\Data\Repositories\PrescriptionMedecineRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllPrescriptionMedecinesTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionMedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
