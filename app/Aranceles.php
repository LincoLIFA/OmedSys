<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aranceles extends Model
{
    protected $fillable = [ 'id' , 'procedimientos' , 'precios' ,'comentarios', 'medico_id' , 'especialidades_id'  ];


   public function especialistas()
    {
        return $this->belongsTo('App\Especialistas', 'medico_id');
    }
    public function especialidades()
    {
        return $this->belongsTo('App\Especialidades', 'especialidades_id');
    }
   
}
