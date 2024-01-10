<?php

namespace App\Containers\Sms\UI\API\Transformers;

use App\Containers\Sms\Models\Sms;
use App\Ship\Parents\Transformers\Transformer;

class SmsTransformer extends Transformer
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
     * @param Sms $entity
     *
     * @return array
     */
    public function transform(Sms $entity)
    {
        $response = [
            'object' => 'Sms',
            'id' => $entity->getHashedKey(),
            'real_id'    => $entity->id,
            'doctor_id' => $entity->doctor_id,
            'title' => $entity->title,
            'type' => $entity->type,
            'message' => $entity->message,
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
