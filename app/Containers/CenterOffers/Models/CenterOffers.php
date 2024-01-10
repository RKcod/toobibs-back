<?php

namespace App\Containers\CenterOffers\Models;

use App\Ship\Parents\Models\Model;

class CenterOffers extends Model
{
    protected $fillable = [
      'title',
      'description',
      'image',
      'center_id',
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
    protected $resourceKey = 'centeroffers';
}
