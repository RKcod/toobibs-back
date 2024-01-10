<?php

namespace App\Containers\Medecine\Tasks;

use App\Containers\Medecine\Data\Repositories\MedecineRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteMedecineTask extends Task
{

    protected $repository;

    public function __construct(MedecineRepository $repository)
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
