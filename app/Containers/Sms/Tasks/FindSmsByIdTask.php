<?php

namespace App\Containers\Sms\Tasks;

use App\Containers\Sms\Data\Repositories\SmsRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindSmsByIdTask extends Task
{

    protected $repository;

    public function __construct(SmsRepository $repository)
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
