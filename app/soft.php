<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soft extends Model
{
  public $timestamps = false;
  protected $fillable = [
      'name','descr', 'lan', 'prise','site', 'count','type'
  ];
  public function sale()
    {
        return $this->hasMany('App\sale','id_soft','id');
    }
}
