<?php

namespace App\Containers\AppSection\Adress\Models;

use App\Ship\Parents\Models\Model;

class Adress extends Model
{
    protected $fillable = [
        'doctor_id',
        'address'
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
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Adress';
}
