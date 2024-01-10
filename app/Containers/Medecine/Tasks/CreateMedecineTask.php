<?php

namespace App\Containers\Medecine\Tasks;

use App\Containers\Medecine\Data\Repositories\MedecineRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateMedecineTask extends Task
{

    protected $repository;

    public function __construct(MedecineRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            print_r($exception->getMessage());
            throw new CreateResourceFailedException();
        }
    }
}
