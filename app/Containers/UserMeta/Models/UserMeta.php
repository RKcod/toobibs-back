<?php

namespace App\Containers\UserMeta\Models;

use App\Ship\Parents\Models\Model;

class UserMeta extends Model
{
    protected $fillable = [
      'type',
      'start_year',
      'end_year',
      'title',
      'at',
      'description',
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
    protected $resourceKey = 'usermetas';
}
