<?php

namespace App\Containers\Appointment\Tasks;

use App\Containers\Appointment\Data\Repositories\AppointmentRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class ReminderTask extends Task
{

  protected $repository;

  public function __construct(AppointmentRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run($date, $field, $alert)
  {
      return $this->repository->findWhere(["date"=>$date, $field=>$alert]);
  }
}
