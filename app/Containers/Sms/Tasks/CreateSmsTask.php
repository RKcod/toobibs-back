<?php

namespace App\Containers\Sms\Tasks;

use App\Containers\Sms\Data\Repositories\SmsRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateSmsTask extends Task
{

    protected $repository;

    public function __construct(SmsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            print_r($exception);
        }
    }
}
