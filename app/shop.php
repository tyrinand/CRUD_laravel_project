<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shop extends Model
{
  public $timestamps = false;
  protected $fillable = [
      'name', 'site', 'fio','phone'
  ];
  public function sale()
    {
        return $this->hasMany('App\sale','id_shop','id');
    }
}
