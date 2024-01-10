<?php

namespace App\Containers\Availability\Tasks;

use App\Containers\Availability\Data\Repositories\AvailabilityRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindAvailabilityByDateTask extends Task
{

    protected $repository;

    public function __construct(AvailabilityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($date)
    {
        try {
            return $this->repository->findWhere(['date' => $date])->first();
        }
        catch (Exception $exception) {
          return null;
            //throw new NotFoundException();
        }
    }
}
