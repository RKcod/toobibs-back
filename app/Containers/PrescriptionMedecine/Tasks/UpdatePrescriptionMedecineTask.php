<?php

namespace App\Containers\PrescriptionMedecine\Tasks;

use App\Containers\PrescriptionMedecine\Data\Repositories\PrescriptionMedecineRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdatePrescriptionMedecineTask extends Task
{

    protected $repository;

    public function __construct(PrescriptionMedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
