<?php

namespace App\Containers\Speciality\Tasks;

use App\Containers\Speciality\Data\Repositories\SpecialityRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSpecialityTask extends Task
{

    protected $repository;

    public function __construct(SpecialityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
