<?php

namespace App\Containers\Prices\Tasks;

use App\Containers\Prices\Data\Repositories\PricesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreatePricesTask extends Task
{

    protected $repository;

    public function __construct(PricesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
