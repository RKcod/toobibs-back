<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\Address;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteUserTask
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class DeleteAddressTask extends Task
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     *
     * @param User $user
     *
     * @return bool
     * @throws DeleteResourceFailedException
     */
    public function run(Address $address)
    {
        try {
            //$this->repository->delete($user->id);
            return $this->repository->delete($address->id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
