<?php

namespace App\Containers\Speciality\Tasks;

use App\Containers\Speciality\Data\Repositories\SpecialityRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSpecialityByIdTask extends Task
{

    protected $repository;

    public function __construct(SpecialityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
