<?php

namespace App\Containers\User\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;
use App\Containers\User\Models\User;
/**
 * Class UserRepository.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name'       => 'like',
        'last_name'       => 'like',
        'id'         => '=',
        'center_id'         => '=',
        'display_home'         => '=',
        'email'      => '=',
	'phone_login' => '=',
        'confirmed'  => '=',
        'do_teleconsult'  => '=',
        'user_type'  => '=',
        'address'  => '=',
        'speciality'  => 'like',
        'created_at' => 'like',
    ];


    public function model(){
 
	return User::class;
    }

    public function fieldByField($field,$value){
	return $this->model->where($field,$value)->get();

    }

}
