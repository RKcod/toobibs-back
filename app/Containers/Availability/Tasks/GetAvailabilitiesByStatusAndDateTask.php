<?php

namespace App\Containers\Availability\Tasks;

use App\Containers\Availability\Data\Repositories\AvailabilityRepository;
use App\Ship\Parents\Tasks\Task;

class GetAvailabilitiesByStatusAndDateTask extends Task
{

  protected $repository;

  public function __construct(AvailabilityRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run($date, $status)
  {
    return $this->repository->findWhere(["date"=>$date, "status"=>$status]);
  }
}
