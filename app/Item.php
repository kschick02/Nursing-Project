<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
//{
//
  //public $timestamps = false;
  
//  public function patient()
 //{
   //  return $this->belongsTo('App\Patient');
//}

{

    public $fillable = ['title','description'];

}


