<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenios extends Model
{
    protected $fillable = [ 'id' , 'fecha' , 'empresa' , 'descuento' , 'observacion' , 'contacto'  ];
}
