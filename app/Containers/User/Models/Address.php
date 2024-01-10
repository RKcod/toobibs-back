<?php

namespace App\Containers\User\Models;

use App\Ship\Parents\Models\Model;
use App\Ship\Parents\Requests\Request;
class Address extends Model
{
  protected $table = 'address';
  protected $fillable = [
    'address',
    'doctor_id',
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
  protected $resourceKey = 'address';
}
