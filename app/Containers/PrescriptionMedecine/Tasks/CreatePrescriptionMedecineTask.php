<?php

namespace App\Containers\PrescriptionMedecine\Tasks;

use App\Containers\PrescriptionMedecine\Data\Repositories\PrescriptionMedecineRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePrescriptionMedecineTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionMedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            print_r($exception->getMessage());
            throw new CreateResourceFailedException();
        }
    }
}
