<?php

namespace App\Containers\Prices\UI\API\Transformers;

use App\Containers\Prices\Models\Prices;
use App\Ship\Parents\Transformers\Transformer;

class PricesTransformer extends Transformer
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
   * @param Prices $entity
   *
   * @return array
   */
  public function transform(Prices $entity)
  {
    $response = [
      'object' => 'Prices',
      'id' => $entity->getHashedKey(),
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,
      'price_cabinet_consultation' => $entity->price_cabinet_consultation,
      'price_teleconsultation' => $entity->price_teleconsultation,
      'price_house_consultation' => $entity->price_house_consultation,
      'currency' => $entity->currency,
      'doctor_id' => $entity->doctor_id,
      'fees' => $entity->fees,
      'fees_type' => $entity->fees_type,
      'profile_type' => $entity->profile_type,
      'real_id' => $entity->id,
    ];

    $response = $this->ifAdmin([
      'real_id' => $entity->id,
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
}
