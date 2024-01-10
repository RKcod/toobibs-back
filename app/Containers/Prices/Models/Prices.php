<?php

namespace App\Containers\Prices\Models;

use App\Ship\Parents\Models\Model;

class Prices extends Model
{
    protected $fillable = [
      'price_cabinet_consultation',
      'price_teleconsultation',
      'price_house_consultation',
      'currency',
      'doctor_id',
      'fees',
      'fees_type',
      'profile_type'
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
    protected $resourceKey = 'prices';
}
