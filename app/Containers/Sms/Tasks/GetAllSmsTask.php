<?php

namespace App\Containers\Sms\Tasks;

use App\Containers\Sms\Data\Repositories\SmsRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSmsTask extends Task
{

    protected $repository;

    public function __construct(SmsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
