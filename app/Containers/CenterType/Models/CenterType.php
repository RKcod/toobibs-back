<?php

namespace App\Containers\CenterType\Models;

use App\Ship\Parents\Models\Model;

class CenterType extends Model
{
    protected $fillable = [
    'name',
    'description',
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
    protected $resourceKey = 'centertypes';
}
