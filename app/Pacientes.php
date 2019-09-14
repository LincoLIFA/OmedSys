<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    protected $fillable = [ 'id' , 'pacidentificacion' , 'pacnombre' , 'pacapellidoP' , 'pacapellidoM' , 'pacfechaN' , 'pacsexo' , 'paccorreo' ,'pactelefono' ];
}








