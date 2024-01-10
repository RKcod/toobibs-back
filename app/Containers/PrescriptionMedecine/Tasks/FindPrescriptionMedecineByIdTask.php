<?php

namespace App\Containers\PrescriptionMedecine\Tasks;

use App\Containers\PrescriptionMedecine\Data\Repositories\PrescriptionMedecineRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindPrescriptionMedecineByIdTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionMedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
          print_r($exception->getMessage());
            throw new NotFoundException();
        }
    }
}
