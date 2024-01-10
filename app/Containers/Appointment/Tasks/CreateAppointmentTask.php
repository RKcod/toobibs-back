<?php

namespace App\Containers\Appointment\Tasks;

use App\Containers\Appointment\Data\Repositories\AppointmentRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAppointmentTask extends Task
{

    protected $repository;

    public function __construct(AppointmentRepository $repository)
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
