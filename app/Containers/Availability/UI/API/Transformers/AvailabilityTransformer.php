<?php

namespace App\Containers\Availability\UI\API\Transformers;

use App\Containers\Availability\Models\Availability;
use App\Ship\Parents\Transformers\Transformer;

class AvailabilityTransformer extends Transformer
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
   * @param Availability $entity
   *
   * @return array
   */
  public function transform(Availability $entity)
  {
    $response = [
      'object' => 'Availability',
      'id' => $entity->getHashedKey(),
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,
      'date' => $entity->date,
      'start_time' => $entity->start_time,
      'end_time' => $entity->end_time,
      'description' => $entity->description,
      'users_id' => $entity->users_id,
      'status' => $entity->status,
      'real_id' => $entity->id,

    ];

    $response = $this->ifAdmin([
      'real_id' => $entity->id,
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
}
