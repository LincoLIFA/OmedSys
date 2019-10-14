<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model


{
     public function citas()
     {
         return $this->hasMany('App\Citas');
     }
     

     protected $fillable = [ 'id' , 'title' , 'description' , 'color' , 'start','end'];
}
