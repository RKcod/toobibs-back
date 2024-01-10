<?php

namespace App\Containers\Prescription\Models;

use App\Ship\Parents\Models\Model;

class Prescription extends Model
{
    protected $fillable = [
      'email',
      'first_name',
      'gender',
      'last_name',
      'phone',
      'profile',
      'reason',
      'user_id',
      'doctor_id',
      'appointment_id',
      'medicine_name',
      'typeMedecine',
      'number',
      'unit',
      'dosage',
      'frequency',
      'time_of_intake',
      'first_intake_date',
      'first_intake_date2',
      'other_precisions',
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
    protected $resourceKey = 'prescriptions';
}
