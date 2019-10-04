<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especia extends Model
{
    protected $fillable = [ 'id' , 'rut_med' , 'medidentificacion' , 'mednombres' , 'medapellidos' , 'medespecialidad' , 'medtelefono' , 'medcorreo' ];
}

	
