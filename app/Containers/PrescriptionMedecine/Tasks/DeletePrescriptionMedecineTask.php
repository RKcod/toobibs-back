<?php

namespace App\Containers\PrescriptionMedecine\Tasks;

use App\Containers\PrescriptionMedecine\Data\Repositories\PrescriptionMedecineRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeletePrescriptionMedecineTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionMedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
