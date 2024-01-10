<?php

namespace App\Containers\AppSection\Adress\Tasks;

use App\Containers\AppSection\Adress\Data\Repositories\AdressRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAdressesTask extends Task
{
    protected AdressRepository $repository;

    public function __construct(AdressRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
