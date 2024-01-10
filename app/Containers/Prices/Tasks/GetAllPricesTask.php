<?php

namespace App\Containers\Prices\Tasks;

use App\Containers\Prices\Data\Repositories\PricesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllPricesTask extends Task
{

    protected $repository;

    public function __construct(PricesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
