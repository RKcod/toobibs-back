<?php

namespace App\Containers\CenterType\UI\API\Transformers;

use App\Containers\CenterType\Models\CenterType;
use App\Ship\Parents\Transformers\Transformer;

class CenterTypeTransformer extends Transformer
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
     * @param CenterType $entity
     *
     * @return array
     */
    public function transform(CenterType $entity)
    {
        $response = [
            'object' => 'CenterType',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'description' => $entity->description,
            'real_id' => $entity->id,
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
