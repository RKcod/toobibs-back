<?php

namespace App\Containers\Appointment\Tasks;

use App\Containers\Appointment\Data\Repositories\AppointmentRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteAppointmentTask extends Task
{

    protected $repository;

    public function __construct(AppointmentRepository $repository)
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
