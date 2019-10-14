<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialistas extends Model
{

    public function especialidades()
    {
        return $this->belongsTo('App\Especialidades');
    }

    protected $fillable = [ 'id' , 'rut_med' , 'medidentificacion' , 'mednombres' , 'medapellidos' , 'medespecialidad' , 'medtelefono' , 'medcorreo' ];
}

	
