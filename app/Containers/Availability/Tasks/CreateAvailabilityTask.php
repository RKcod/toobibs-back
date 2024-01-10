<?php

namespace App\Containers\Availability\Tasks;

use App\Containers\Availability\Data\Repositories\AvailabilityRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAvailabilityTask extends Task
{

    protected $repository;

    public function __construct(AvailabilityRepository $repository)
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
