<?php

namespace App\Containers\Call\UI\API\Transformers;

use App\Containers\Appointment\Models\Appointment;
use App\Containers\Call\Models\Call;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class CallTransformer extends Transformer
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
    'doctor',
    'user'
  ];

  /**
   * @param Call $entity
   *
   * @return array
   */
  public function transform(Call $entity)
  {
    $response = [
      'object' => 'Call',
      'id' => $entity->getHashedKey(),
      'real_id' => $entity->id,
      'user_from_id' => $entity->user_from_id,
      'user_to_id' => $entity->user_to_id,
      'rdv_id' => $entity->rdv_id,
      'duration' => $entity->duration,
      'has_missed' => $entity->has_missed,
      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,

    ];

    $response = $this->ifAdmin([
      //'real_id' => $entity->id,
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
  public function includeDoctor(Call $appointment)
  {
    return $appointment->doctor == null ? null : $this->item($appointment->doctor, new UserTransformer());
  }
  public function includeUser(Call $appointment)
  {
    return $appointment->user == null ? null : $this->item($appointment->user, new UserTransformer());
  }
}
