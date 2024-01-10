<?php

namespace App\Containers\Center\UI\API\Transformers;

use App\Containers\Center\Models\Center;
use App\Ship\Parents\Transformers\Transformer;

class CenterTransformer extends Transformer
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
   * @param Center $entity
   *
   * @return array
   */
  public function transform(Center $entity)
  {
    $response = [
      'object' => 'Center',
      'id' => $entity->getHashedKey(),
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,
      'name' => $entity->name,
      'address' => $entity->address,
      'lat' => $entity->lat,
      'lng' => $entity->lng,
      'phone' => $entity->phone,
      'email' => $entity->email,
      'real_id' => $entity->id,
      'center_type_id' => $entity->center_type_id,

    ];

    $response = $this->ifAdmin([
      'real_id' => $entity->id,
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
}
