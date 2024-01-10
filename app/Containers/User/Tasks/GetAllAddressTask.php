<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\AddressRepository;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class GetAllAddressTask extends Task
{

  protected $repository;

  public function __construct(AddressRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run()
  {
    //$addresses = DB::table('address')->get();
    return $this->repository->paginate();
  }
}
