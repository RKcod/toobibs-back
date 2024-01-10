<?php

namespace App\Containers\AppSection\Adress\UI\API\Transformers;

use App\Containers\AppSection\Adress\Models\Adress;
use App\Ship\Parents\Transformers\Transformer;

class AdressTransformer extends Transformer
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

    public function transform(Adress $adress): array
    {
        $response = [
            'object' => $adress->getResourceKey(),
            'id' => $adress->getHashedKey(),
            'created_at' => $adress->created_at,
            'updated_at' => $adress->updated_at,
            'readable_created_at' => $adress->created_at->diffForHumans(),
            'readable_updated_at' => $adress->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $adress->id,
            // 'deleted_at' => $adress->deleted_at,
        ], $response);
    }
}
