<?php

namespace App\Containers\Appointment\Tasks;

use App\Containers\Appointment\Data\Repositories\AppointmentRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAppointmentsTask extends Task
{

    protected $repository;

    public function __construct(AppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
