<?php

namespace App\Containers\Prices\Tasks;

use App\Containers\Prices\Data\Repositories\PricesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdatePricesTask extends Task
{

    protected $repository;

    public function __construct(PricesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
