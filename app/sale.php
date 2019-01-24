<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
  public $timestamps = false;
  protected $fillable = [
      'date', 'email', 'count','id_client','id_shop','id_soft','id_discount'
  ];
  protected $dates = ['date'];
// функции связи по ключам
  public function client()
    {
        return $this->belongsTo('App\client','id_client','id');
    }
  public function discount()
    {
        return $this->belongsTo('App\discount','id_discount','id');
    }
    public function shop()
      {
          return $this->belongsTo('App\shop','id_shop','id');
      }
    public function soft()
      {
        return $this->belongsTo('App\soft','id_soft','id');
      }
      public function full_prise($prise,$count,$dis)
        {
          $sum = $prise * $count;
          $sum = $sum - $sum * ($dis/100);
          return $sum;
        }
}
