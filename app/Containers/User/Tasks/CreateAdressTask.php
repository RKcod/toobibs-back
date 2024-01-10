<?php

namespace App\Containers\User\Tasks;

use App\Containers\Sms\Data\Repositories\SmsRepository;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Exceptions\InternalErrorException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\DB;

class CreateAdressTask extends Task
{

  protected $repository;

  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }

  public function run(array $data)
  {
    // try {
    //   return DB::table('address')->insert($data);
    // } catch (Exception $e) {
    //   print_r($e);
    // }

    return $data;

  }
}
