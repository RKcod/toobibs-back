<?php

namespace App\Containers\Call\Tasks;

use App\Containers\Call\Data\Repositories\CallRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCallsTask extends Task
{

    protected $repository;

    public function __construct(CallRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($user_field, $user_value, $has_missed)
    {
        return $this->repository->findWhere([$user_field=>$user_value, "has_missed"=>$has_missed]);
    }
}
