<?php

namespace App\Containers\UserMeta\Tasks;

use App\Containers\UserMeta\Data\Repositories\UserMetaRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindUserMetaByIdTask extends Task
{

    protected $repository;

    public function __construct(UserMetaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
