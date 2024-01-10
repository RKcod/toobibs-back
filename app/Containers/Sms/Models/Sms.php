<?php

namespace App\Containers\Sms\Models;

use App\Ship\Parents\Models\Model;

class Sms extends Model
{
    protected $fillable = [
      'title',
      'type',
      'message',
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
    protected $resourceKey = 'sms';
}
