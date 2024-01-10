<?php

namespace App\Containers\CenterType\Tasks;

use App\Containers\CenterType\Data\Repositories\CenterTypeRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateCenterTypeTask extends Task
{

    protected $repository;

    public function __construct(CenterTypeRepository $repository)
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
