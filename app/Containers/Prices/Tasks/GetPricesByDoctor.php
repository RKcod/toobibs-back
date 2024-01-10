<?php

namespace App\Containers\Prices\Tasks;

use App\Containers\Prices\Data\Repositories\PricesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class GetPricesByDoctor extends Task
{

  protected $repository;

  public function __construct(PricesRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run($doctor_id)
  {
    try {
      return $this->repository->findWhere(["doctor_id"=>$doctor_id]);
    }
    catch (Exception $exception) {
      throw new NotFoundException();
    }
  }
}
