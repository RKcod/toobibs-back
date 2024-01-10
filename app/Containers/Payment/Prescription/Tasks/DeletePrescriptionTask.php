<?php

namespace App\Containers\Prescription\Tasks;

use App\Containers\Prescription\Data\Repositories\PrescriptionRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeletePrescriptionTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionRepository $repository)
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
