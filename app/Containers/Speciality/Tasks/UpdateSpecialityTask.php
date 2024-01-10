<?php

namespace App\Containers\Speciality\Tasks;

use App\Containers\Speciality\Data\Repositories\SpecialityRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSpecialityTask extends Task
{

    protected $repository;

    public function __construct(SpecialityRepository $repository)
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
