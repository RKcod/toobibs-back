<?php

namespace App\Containers\Sms\Tasks;

use App\Containers\Sms\Data\Repositories\SmsRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteSmsTask extends Task
{

    protected $repository;

    public function __construct(SmsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
