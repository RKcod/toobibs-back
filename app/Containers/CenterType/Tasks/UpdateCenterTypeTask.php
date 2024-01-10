<?php

namespace App\Containers\CenterType\Tasks;

use App\Containers\CenterType\Data\Repositories\CenterTypeRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCenterTypeTask extends Task
{

    protected $repository;

    public function __construct(CenterTypeRepository $repository)
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
