<?php

namespace App\Containers\Medecine\Tasks;

use App\Containers\Medecine\Data\Repositories\MedecineRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindMedecineByIdTask extends Task
{

    protected $repository;

    public function __construct(MedecineRepository $repository)
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
