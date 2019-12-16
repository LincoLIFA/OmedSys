<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especialistas extends Model
{

    public function especialidades()
    {
        return $this->belongsTo('App\Especialidades');
    }
    public function aranceles()
    {
        return $this->hasMany('App\Aranceles');
    }

    protected $fillable = [ 'id' , 'rut_med' , 'medidentificacion' , 'mednombres' , 'medapellidos' , 'medespecialidad' , 'medtelefono' ,'avatar', 'medcorreo' ];
}

	
