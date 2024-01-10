<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;

class SearchUserTask extends Task
{

  protected $repository;

  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param $userId
   *
   * @return User
   * @throws NotFoundException
   */
  public function run($queries)
  {
    // find the user by its id
    $users = $this->repository->findWhere($queries);
    /*$users = $this->repository->scopeQuery(function ($query) {
      return $query->where('sort_order', 'asc');
    })->all();*/
    return $users;
  }
}
