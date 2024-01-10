<?php

namespace App\Containers\Appointment\Models;

use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Appointment extends Model
{
  protected $table = 'appointments';
    protected $fillable = [
      'users_id',
      'date',
      'time',
      'motif',
      'type',
      'first_name',
      'last_name',
      'email',
      'phone',
      'address',
      'is_me',
      'teleconsult',
      'status',
      'doctor_id',
      'doctorName',
      'doctorSpeciality',
      'alert',
      'cost',
      'currency',
      'alert_today',
      'payment_method',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */


  public function doctor(){
    return $this->belongsTo(User::class, "doctor_id");
  }
  public function user(){
    return $this->belongsTo(User::class, "users_id");
  }
}
