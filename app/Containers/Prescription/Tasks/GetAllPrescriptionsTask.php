<?php

namespace App\Containers\Prescription\Tasks;

use App\Containers\Prescription\Data\Repositories\PrescriptionRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllPrescriptionsTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
