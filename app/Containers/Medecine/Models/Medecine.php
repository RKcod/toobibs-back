<?php

namespace App\Containers\Medecine\Models;

use App\Ship\Parents\Models\Model;

class Medecine extends Model
{
    protected $fillable = [
      'name',
      'type'
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
    protected $resourceKey = 'medecines';
}
