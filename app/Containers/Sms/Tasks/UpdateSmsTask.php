<?php

namespace App\Containers\Sms\Tasks;

use App\Containers\Sms\Data\Repositories\SmsRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateSmsTask extends Task
{

    protected $repository;

    public function __construct(SmsRepository $repository)
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
