<?php

namespace App\Containers\User\Models;

use App\Containers\Authorization\Traits\AuthorizationTrait;
use App\Containers\Availability\Models\Availability;
use App\Containers\Center\Models\Center;
use App\Containers\Payment\Contracts\ChargeableInterface;
use App\Containers\Payment\Models\PaymentAccount;
use App\Containers\Payment\Traits\ChargeableTrait;
use App\Containers\Prices\Models\Prices;
use App\Containers\Speciality\Models\Speciality;
use App\Ship\Parents\Models\UserModel;

/**
 * Class User.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class User extends UserModel implements ChargeableInterface
{

  use ChargeableTrait;
  use AuthorizationTrait;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'users';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'password',
    'device',
    'platform',
    'gender',
    'birth',
    'social_provider',
    'social_token',
    'social_refresh_token',
    'social_expires_in',
    'social_token_secret',
    'social_id',
    'social_avatar',
    'social_avatar_original',
    'social_nickname',
    'confirmed',
    'is_client',
    'status',
    'display_home',
    'user_type',
    'profile_picture',
    'address',
    'phone',
    'phone_login',
    'lang',
    'speciality',
    'center_id',
    'doctor_serial_number',
    'do_teleconsult',
    'created_at',
    'updated_at',
    'deleted_at',
  ];

  protected $casts = [
    'is_client' => 'boolean',
  ];

  /**
   * The dates attributes.
   *
   * @var array
   */
  protected $dates = [
    'created_at',
    'updated_at',
    'deleted_at',
  ];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  public function paymentAccounts()
  {
    return $this->hasMany(PaymentAccount::class);
  }

  public function prices()
  {
    return $this->hasOne(Prices::class, "doctor_id");
  }

  public function center()
  {
    return $this->belongsTo(Center::class, "center_id");
  }

  public function specialities()
  {
    return $this->belongsTo(Speciality::class, "speciality");
  }

  public function availabilities()
  {
    return $this->hasMany(Availability::class, "users_id");
  }

}
