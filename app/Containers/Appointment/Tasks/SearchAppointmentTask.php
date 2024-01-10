<?php

namespace App\Containers\Appointment\Tasks;

use App\Containers\Appointment\Data\Repositories\AppointmentRepository;
use App\Containers\Appointment\Models\Appointment;
use App\Ship\Parents\Tasks\Task;

class SearchAppointmentTask extends Task
{
  protected $repository;

  public function __construct(AppointmentRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run($start_date, $end_date, $field, $value)
  {
      return $this->repository->findWhere([['date','>=', $start_date],['date','<=', $end_date], $field=>$value]);
  }
}
