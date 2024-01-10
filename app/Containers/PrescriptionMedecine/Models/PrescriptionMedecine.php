<?php

namespace App\Containers\PrescriptionMedecine\Models;

use App\Containers\Medecine\Models\Medecine;
use App\Containers\Prescription\Models\Prescription;
use App\Ship\Parents\Models\Model;

class PrescriptionMedecine extends Model
{
  //  protected $fillable = [
    //  'prescription_id',
     // 'medicine_id',
     // 'duration',
      //'date_first_taken',
      //'quantity',
      //'frequency',
      //'time_of_intake',
      //'renewal_date',
      //'other_precisions',
      //'created_at'
    //];

    protected $guarded=[];
    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $table = "prescriptionmedecines";

    protected $dates = [
      'created_at',
      'updated_at'
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'prescriptionmedecines';

    public function prescription(){
      return $this->belongsTo(Prescription::class, 'prescription_id','id');
    }
    public  function medicine(){
      return $this->belongsTo(Medecine::class, 'medicine_id');
    }
}
