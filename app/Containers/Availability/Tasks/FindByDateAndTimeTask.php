<?php

namespace App\Containers\Availability\Tasks;

use App\Containers\Availability\Data\Repositories\AvailabilityRepository;
use App\Ship\Parents\Tasks\Task;

class FindByDateAndTimeTask extends Task
{

  protected $repository;

  public function __construct(AvailabilityRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run($date, $time)
  {
    try {
      return $this->repository->findWhere(['date' => $date, 'start_time' => $time])->first();
    }
    catch (Exception $exception) {
      return null;
      //throw new NotFoundException();
    }
  }
}
