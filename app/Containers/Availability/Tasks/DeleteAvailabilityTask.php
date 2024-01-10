<?php

namespace App\Containers\Availability\Tasks;

use App\Containers\Availability\Data\Repositories\AvailabilityRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteAvailabilityTask extends Task
{

    protected $repository;

    public function __construct(AvailabilityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($field, $value)
    {
        try {
            return $this->repository->deleteWhere([$field => $value]);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
