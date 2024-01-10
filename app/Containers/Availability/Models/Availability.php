<?php

namespace App\Containers\Availability\Models;

use App\Ship\Parents\Models\Model;

class Availability extends Model
{
  protected $table = 'availabilities';

    protected $fillable = [
      'date',
      'start_time',
      'end_time',
      'description',
      'users_id',
      'status',
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
    protected $resourceKey = 'availabilities';
}
