<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    public function citas()
    {
        return $this->hasMany('App\Citas');
    }
  
    protected $fillable = [ 'id' , 'pacidentificacion' , 'pacnombre' , 'pacapellidoP' , 'pacapellidoM' , 'pacfechaN' , 'pacsexo' , 'paccorreo' ,'pactelefono' ];
}








