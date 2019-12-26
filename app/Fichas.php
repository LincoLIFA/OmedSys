<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichas extends Model
{
    protected $fillable = [ 'id'  ,'citas_id', 'paciente_id' , 'medico_id' , 'especialidades_id' ,  'aranceles_id' , 'observaciones'];
    public function citas()
    {
        return $this->belongsTo('App\Citas', 'citas_id');
    }
    public function pacientes()
    {
        return $this->belongsTo('App\Pacientes', 'paciente_id');
    }
    
    public function especialistas()
    {
        return $this->belongsTo('App\Especialistas', 'medico_id');
    }
    public function especialidades()
    {
        return $this->belongsTo('App\Especialidades', 'especialidades_id');
    }
    public function aranceles()
    {
        return $this->belongsTo('App\Aranceles', 'aranceles_id');
    }
    
}
