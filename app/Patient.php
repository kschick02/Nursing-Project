<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
  public $timestamps = false;

  public function orders()
 {
     return $this->hasMany('App\Order');
 }

// public function labs()
//{
//    return $this->hasMany('App\Lab);
//}
}
