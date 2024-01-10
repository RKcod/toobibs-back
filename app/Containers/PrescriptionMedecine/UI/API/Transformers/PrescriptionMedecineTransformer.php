<?php

namespace App\Containers\PrescriptionMedecine\UI\API\Transformers;

use App\Containers\Medecine\UI\API\Transformers\MedecineTransformer;
use App\Containers\PrescriptionMedecine\Models\PrescriptionMedecine;
use App\Ship\Parents\Transformers\Transformer;

class PrescriptionMedecineTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
      'medicine'
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param PrescriptionMedecine $entity
     *
     * @return array
     */
    public function transform(PrescriptionMedecine $entity)
    {
        $response = [
            'object' => 'PrescriptionMedecine',
            'id' => $entity->getHashedKey(),
            'real_id' => $entity->id,
            'prescription_id' => $entity->prescription_id,
            'medicine_id' => $entity->medicine_id,
            'duration' => $entity->duration,
            'date_first_taken' => $entity->date_first_taken,
            'quantity' => $entity->quantity,
            'frequency' => $entity->frequency,
            'time_of_intake' => $entity->time_of_intake,
            'renewal_date' => $entity->renewal_date,
            'other_precisions' => $entity->other_precisions,
            'created_at' => $entity->created_at->toDateTimeString(),
            'updated_at' => $entity->updated_at->toDateTimeString(),

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
    public function  includeMedicine(PrescriptionMedecine $prescriptionMedecine){
      return $this->item($prescriptionMedecine->medicine, new MedecineTransformer());
    }
}
