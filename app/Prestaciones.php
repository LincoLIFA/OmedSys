<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestaciones extends Model
{
    protected $fillable = [ 'id'  ,'fichas_id', 'paciente_id' , 'medico_id' , 'especialidades_id' ,  'aranceles_id' , 'comentarios','estado'];
    public function fichas()
    {
        return $this->belongsTo('App\Fichas', 'fichas_id');
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
