<?php

namespace App\Containers\UserMeta\Tasks;

use App\Containers\UserMeta\Data\Repositories\UserMetaRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateUserMetaTask extends Task
{

    protected $repository;

    public function __construct(UserMetaRepository $repository)
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
