<?php

namespace App\Containers\Speciality\UI\API\Transformers;

use App\Containers\Speciality\Models\Speciality;
use App\Ship\Parents\Transformers\Transformer;

class SpecialityTransformer extends Transformer
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
   * @param Speciality $entity
   *
   * @return array
   */
  public function transform(Speciality $entity)
  {
    $response = [
      'object' => 'Speciality',
      'id' => $entity->getHashedKey(),
      'name' => $entity->name,
      'description' => $entity->description,
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,
      'real_id' => $entity->id,

    ];

    $response = $this->ifAdmin([
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
}
