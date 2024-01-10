<?php

namespace App\Containers\UserMeta\Tasks;

use App\Containers\UserMeta\Data\Repositories\UserMetaRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllUserMetasTask extends Task
{

    protected $repository;

    public function __construct(UserMetaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
