<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class citas extends Model
{
    protected $fillable = [ 'id' , 'citfecha' , 'cithora' , 'citPaciente' , 'citMedico' , 'citEsp' , 'citEstado' , 'citObservaciones' , 'confirmacion' , 'start' ];
}




