<?php

namespace App\Containers\Center\Models;

use App\Ship\Parents\Models\Model;

class Center extends Model
{
    protected $fillable = [
      'name',
      'address',
      'lat',
      'lng',
      'phone',
      'email',
      'center_type_id',
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
    protected $resourceKey = 'centers';
}
