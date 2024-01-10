<?php

namespace App\Containers\UserMeta\UI\API\Transformers;

use App\Containers\UserMeta\Models\UserMeta;
use App\Ship\Parents\Transformers\Transformer;

class UserMetaTransformer extends Transformer
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
   * @param UserMeta $entity
   *
   * @return array
   */
  public function transform(UserMeta $entity)
  {
    $response = [
      'object' => 'UserMeta',
      'id' => $entity->getHashedKey(),
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,
      'type' => $entity->type,
      'start_year' => $entity->start_year,
      'end_year' => $entity->end_year,
      'title' => $entity->title,
      'at' => $entity->at,
      'doctor_id' => $entity->doctor_id,
      'description' => $entity->description,
      'real_id' => $entity->id,
    ];

    $response = $this->ifAdmin([
      'real_id' => $entity->id,
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
}
