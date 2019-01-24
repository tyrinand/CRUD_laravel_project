<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
  protected $fillable = [
      'name', 'email', 'adr','phone', 'mark'
  ];
  public function sale()
    {
        return $this->hasMany('App\sale','id_client','id');
    }
}
