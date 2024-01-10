<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Models\User;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUserByCredentialsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserByCredentialsTask extends Task
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
        string $email,
        string $password,
        string $first_name = null,
        string $last_name = null,
        string $gender = null,
        string $birth = null,
        string $address = null,
        string $phone = null,
        string $speciality = null,
        string $doctor_serial_number = null,
        string $user_type = null,
        string $profile_picture = "default.png",
        $center_id = null,
        $do_teleconsult = false,
        $phone_login = null
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
                'speciality' => $speciality,
                'doctor_serial_number' => $doctor_serial_number,
                'user_type' => $user_type,
                'profile_picture' => $profile_picture,
                'center_id' => $center_id,
                'do_teleconsult' => $do_teleconsult,
                'phone_login' => $phone_login,
            ]);

        } catch (Exception $e) {
            throw (new CreateResourceFailedException())->debug($e);
        }

        return $user;
    }

}
