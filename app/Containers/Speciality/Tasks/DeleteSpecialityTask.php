<?php

namespace App\Containers\Speciality\Tasks;

use App\Containers\Speciality\Data\Repositories\SpecialityRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSpecialityTask extends Task
{

    protected $repository;

    public function __construct(SpecialityRepository $repository)
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
