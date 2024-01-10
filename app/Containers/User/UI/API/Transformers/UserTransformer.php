<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\Availability\UI\API\Transformers\AvailabilityTransformer;
use App\Containers\Center\UI\API\Transformers\CenterTransformer;
use App\Containers\Prices\UI\API\Transformers\PricesTransformer;
use App\Containers\Speciality\UI\API\Transformers\SpecialityTransformer;
use App\Containers\User\Models\User;
use Illuminate\Support\Facades\DB;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class UserTransformer.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserTransformer extends Transformer
{

  /**
   * @var  array
   */
  protected $availableIncludes = [
    'roles',
    'center',
    'availabilities',
    'prices',
    'speciality',
  ];

  /**
   * @var  array
   */
  protected $defaultIncludes = [
    'center',
  ];

  /**
   * @param \App\Containers\User\Models\User $user
   *
   * @return array
   */
  public function transform(User $user)
  {
    $response = [
      'object' => 'User',
      'id' => $user->getHashedKey(),
      'first_name' => $user->first_name,
      'last_name' => $user->last_name,
      'email' => $user->email,
      'confirmed' => $user->confirmed,
      'nickname' => $user->nickname,
      'gender' => $user->gender,
      'birth' => $user->birth,
      'display_home' => $user->display_home,
      'status' => $user->status,
      'social_auth_provider' => $user->social_provider,
      'social_id' => $user->social_id,
      'social_avatar' => [
        'avatar' => $user->social_avatar,
        'original' => $user->social_avatar_original,
      ],

      'created_at' => $user->created_at,
      'av' => DB::select("SELECT * from availabilities where users_id=".$user->id." and availabilities.date >= cast(now() as date) order by date asc"),//$user->availabilities()->where("date", "cast(now() as date)"),

      'user_type' => $user->user_type,
      'profile_picture' => $user->profile_picture,
      'center_id' => $user->center_id,
      'address' => $user->address,
      'phone' => $user->phone,
      'phone_login' => $user->phone_login,
      'lang' => $user->lang,
      'do_teleconsult' => $user->do_teleconsult,
      'speciality' => $user->speciality,
      'doctor_serial_number' => $user->doctor_serial_number,

      'updated_at' => $user->updated_at,
      'readable_created_at' => $user->created_at  == null ? null :$user->created_at->diffForHumans(),
      'readable_updated_at' => $user->updated_at  == null ? null :$user->updated_at->diffForHumans(),
      'real_id' => $user->id,
      'speciality_name' => $user->specialities == null ? null : $user->specialities //$this->item($user->specialities, new SpecialityTransformer())
    ];

    $response = $this->ifAdmin([
      'real_id' => $user->id,
      'deleted_at' => $user->deleted_at,
    ], $response);

    return $response;
  }

  public function includeRoles(User $user)
  {
    return $this->collection($user->roles, new RoleTransformer());
  }

  public function includeCenter(User $user)
  {
    return $user->center == null ? null : $this->item($user->center, new CenterTransformer());
  }

  public function includePrices(User $user)
  {
    return $user->prices == null ? null : $this->item($user->prices, new PricesTransformer());
  }

  public function includeSpeciality(User $user)
  {
    return $user->specialities == null ? null : $this->item($user->specialities, new SpecialityTransformer());
  }

  public function includeAvailabilities(User $user)
  {
    return $this->collection($user->availabilities, new AvailabilityTransformer());
  }

}
