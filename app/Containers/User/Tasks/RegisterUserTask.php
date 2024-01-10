<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\Hash;

class RegisterUserTask extends Task
{


  protected $repository;

  public function __construct(UserRepository $repository)
  {
    $this->repository = $repository;
  }

  /**
   * @param bool        $isClient
   * @param string      $email
   * @param string      $password
   * @param string|null $name
   * @param string|null $gender
   * @param string|null $birth
   *
   * @return  mixed
   * @throws  CreateResourceFailedException
   */
  public function run(
    bool $isClient = true,
    string $email = null,
    string $password,
    string $first_name = null,
    string $last_name = null,
    string $gender = null,
    string $birth = null,
    string $address = null,
    string $phone = null,
    string $user_type = null,
    string $profile_picture = "default.png",
    string $phone_login = null
  ): User {

    try {
      // create new user
      $user = $this->repository->create([
        'password'  => Hash::make($password),
        'email'     => $email,
        'first_name'      => $first_name,
        'last_name'      => $last_name,
        'gender'    => $gender,
        'birth'     => $birth,
        'is_client' => $isClient,
        'address' => $address,
        'phone' => $phone,
        'user_type' => $user_type,
        'profile_picture' => $profile_picture,
        'phone_login' => $phone_login,
      ]);

    } catch (Exception $e) {
      throw (new CreateResourceFailedException())->debug($e);
    }

    return $user;
  }}
