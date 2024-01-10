<?php

namespace App\Containers\UserMeta\Tasks;

use App\Containers\UserMeta\Data\Repositories\UserMetaRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateUserMetaTask extends Task
{

    protected $repository;

    public function __construct(UserMetaRepository $repository)
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
