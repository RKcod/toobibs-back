<?php

namespace App\Containers\Center\Tasks;

use App\Containers\Center\Data\Repositories\CenterRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCenterTask extends Task
{

    protected $repository;

    public function __construct(CenterRepository $repository)
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
