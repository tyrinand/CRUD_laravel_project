<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class discount extends Model
{
  public $timestamps = false;
  protected $fillable = [
      'val', 'des'
  ];
  public function sale()
    {
        return $this->hasMany('App\sale','id_discount','id');
    }
}
