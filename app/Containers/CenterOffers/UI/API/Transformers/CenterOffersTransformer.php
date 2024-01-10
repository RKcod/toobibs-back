<?php

namespace App\Containers\CenterOffers\UI\API\Transformers;

use App\Containers\CenterOffers\Models\CenterOffers;
use App\Ship\Parents\Transformers\Transformer;

class CenterOffersTransformer extends Transformer
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
   * @param CenterOffers $entity
   *
   * @return array
   */
  public function transform(CenterOffers $entity)
  {
    $response = [
      'object' => 'CenterOffers',
      'id' => $entity->getHashedKey(),

      'title' => $entity->title,
      'description' => $entity->description,
      'image' => $entity->image,
      'center_id' => $entity->center_id,
      'real_id' => $entity->id,

      'created_at' => $entity->created_at,
      'updated_at' => $entity->updated_at,

    ];

    $response = $this->ifAdmin([
      // 'deleted_at' => $entity->deleted_at,
    ], $response);

    return $response;
  }
}
