<?php

namespace App\Containers\Medecine\UI\API\Transformers;

use App\Containers\Medecine\Models\Medecine;
use App\Ship\Parents\Transformers\Transformer;

class MedecineTransformer extends Transformer
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
     * @param Medecine $entity
     *
     * @return array
     */
    public function transform(Medecine $entity)
    {
        $response = [
            'object' => 'Medecine',
            'id' => $entity->getHashedKey(),
            'real_id' => $entity->id,
            'name' => $entity->name,
            'type' => $entity->type,
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
