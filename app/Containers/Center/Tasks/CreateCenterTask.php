<?php

namespace App\Containers\Center\Tasks;

use App\Containers\Center\Data\Repositories\CenterRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCenterTask extends Task
{

    protected $repository;

    public function __construct(CenterRepository $repository)
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
