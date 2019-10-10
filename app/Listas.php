<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
    protected $fillable = [ 'id' , 'lisfecha' , 'lishora' , 'lisPaciente' , 'lisMedico' , 'lisEsp' , 'lisEstado' , 'lisObservaciones' , 'confirmacion' , 'start' ];
    
}
