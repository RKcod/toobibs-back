<?php

namespace App\Containers\Prescription\Models;

use App\Ship\Parents\Models\Model;
use App\Containers\User\Models\User;
use App\Containers\PrescriptionMedecine\Models\PrescriptionMedecine;
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
      'renewal_date',
      'created_at'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
       
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'prescriptions';

    public function doctor(){
	return $this->belongsTo(User::class,"doctor_id");
    }

    public function user(){
	 return $this->belongsTo(User::class,"user_id");
    }

   public function prescribed(){
	return $this->hasMany(PrescriptionMedecine::class,"prescription_id","id");
   }
}
