<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class citas extends Model
{
    protected $fillable = [ 'id' , 'events_id' , 'paciente_id' , 'medico_id' , 'especialidades_id' ,  'citEstado' , 'citObservaciones' , 'confirmacion'  ];

    public function pacientes()
    {
        return $this->belongsTo('App\Pacientes', 'pacientes_id');
    }
    
    public function especialistas()
    {
        return $this->belongsTo('App\Especialistas', 'especialistas_id');
    }
    public function especialidades()
    {
        return $this->belongsTo('App\Especialidades', 'especalidades_id');
    }
    public function events()
    {
        return $this->belongsTo('App\Events', 'events_id');
    }
    
    
   
}




