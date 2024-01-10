<?php

namespace App\Containers\Medecine\Tasks;

use App\Containers\Medecine\Data\Repositories\MedecineRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateMedecineTask extends Task
{

    protected $repository;

    public function __construct(MedecineRepository $repository)
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
