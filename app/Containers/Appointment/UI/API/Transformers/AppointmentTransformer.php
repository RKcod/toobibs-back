<?php

namespace App\Containers\Appointment\UI\API\Transformers;

use App\Containers\Appointment\Models\Appointment;
use App\Containers\Center\UI\API\Transformers\CenterTransformer;
use App\Containers\User\Models\User;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class AppointmentTransformer extends Transformer
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
   * @param Appointment $entity
   *
   * @return array
   */
  public function transform(Appointment $entity)
  {
    $response = [ 'object' => 'Appointment', 'id' => $entity->getHashedKey(), 'created_at' => $entity->created_at, 'updated_at' => $entity->updated_at, 'users_id' => $entity->users_id, 'date' => $entity->date, 'time' => 
      $entity->time, 'motif' => $entity->motif, 'type' => $entity->type, 'doctor_id' => $entity->doctor_id, 'doctorName'=> $entity->doctorName, 'doctorSpeciality' => $entity->doctorSpeciality, 'first_name' => $entity->first_name, 
      'last_name' => $entity->last_name, 'email' => $entity->email, 'phone' => $entity->phone, 'address' => $entity->address, 'is_me' => $entity->is_me, 'teleconsult' => $entity->teleconsult, 'real_id' => $entity->id, 'status' => 
      $entity->status, 'cost' => $entity->cost, 'currency' => $entity->currency, 'payment_method' => $entity->payment_method,

    ];

    $response = $this->ifAdmin([ 'real_id' => $entity->id,
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
  public function includeDoctor(Appointment $appointment)
  {
    return $appointment->doctor == null ? null : $this->item($appointment->doctor, new UserTransformer());
  }
  public function includeUser(Appointment $appointment)
  {
    return $appointment->user == null ? null : $this->item($appointment->user, new UserTransformer());
  }
}
