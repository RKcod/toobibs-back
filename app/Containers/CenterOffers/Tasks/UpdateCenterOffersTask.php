<?php

namespace App\Containers\CenterOffers\Tasks;

use App\Containers\CenterOffers\Data\Repositories\CenterOffersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateCenterOffersTask extends Task
{

    protected $repository;

    public function __construct(CenterOffersRepository $repository)
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
