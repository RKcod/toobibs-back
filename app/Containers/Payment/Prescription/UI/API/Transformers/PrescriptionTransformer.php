<?php

namespace App\Containers\Prescription\UI\API\Transformers;

use App\Containers\Prescription\Models\Prescription;
use App\Ship\Parents\Transformers\Transformer;

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
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
