<?php

namespace App\Containers\Call\Models;

use App\Containers\User\Models\User;
use App\Ship\Parents\Models\Model;

class Call extends Model
{
    protected $fillable = [
      'user_from_id',
      'user_to_id',
      'rdv_id',
      'duration',
      'has_missed',
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'calls';

  public function user(){
    return $this->belongsTo(User::class, "user_to_id");
  }

  public function doctor(){
    return $this->belongsTo(User::class, "user_from_id");
  }
}
