<?php

namespace App\Containers\Prescription\UI\API\Transformers;

use App\Containers\Prescription\Models\Prescription;
use App\Ship\Parents\Transformers\Transformer;
use App\Containers\User\Models\User;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Containers\PrescriptionMedecine\UI\API\Transformers\PrescriptionMedecineTransformer;
use App\Containers\PrescriptionMedecine\Models\PrescriptionMedecine;
class PrescriptionTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
	'user',
	'doctor',
	'prescribed'
    ];

    /**
     * @param Prescription $entity
     *
     * @return array
     */
    public function transform(Prescription $entity)
    {
        $response = [
            'object' => 'Prescription',
	    'real_id'=>$entity->id,
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at->toDateTimeString(),
            'updated_at' => $entity->updated_at->toDateTimeString(),
            'email' => $entity->email,
            'first_name' => $entity->first_name,
            'gender' => $entity->gender,
            'last_name' => $entity->last_name,
            'phone' => $entity->phone,
            'profile' => $entity->profile,
            'reason' => $entity->reason,
            'user_id' => $entity->user_id,
            'doctor_id' => $entity->doctor_id,
            'appointment_id' => $entity->appointment_id,
            'medicine_name' => $entity->medicine_name,
            'typeMedecine' => $entity->typeMedecine,
            'number' => $entity->number,
            'unit' => $entity->unit,
            'dosage' => $entity->dosage,
            'frequency' => $entity->frequency,
            'time_of_intake' => $entity->time_of_intake,
            'first_intake_date' => $entity->first_intake_date,
            'first_intake_date2' => $entity->first_intake_date2,
            'other_precisions' => $entity->other_precisions,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }

    public function includeDoctor(Prescription $prescription){ return $prescription->doctor == null ? null : $this->item($prescription->doctor,new UserTransformer());}
    public function includeUser(Prescription $prescription){ return $prescription->user == null ? null : $this->item($prescription->user,new UserTransformer());} 
    public function includePrescribed(Prescription $prescription){ return $prescription->prescribed == null ? null :  $this->collection($prescription->prescribed , new PrescriptionMedecineTransformer());}
}
