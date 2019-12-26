<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagos extends Model
{
    protected $fillable = [ 'id'  ,'fichas_id', 'paciente_id' , 'medico_id' , 'especialidades_id' ,  'aranceles_id' , 'comentarios','estado'];
    public function fichas()
    {
        return $this->belongsTo('App\Fichas', 'fichas_id');
    }
    public function descuentos()
    {
        return $this->belongsTo('App\DescuentosPorCaja', 'descuentos_id');
    }
    
    public function medios()
    {
        return $this->belongsTo('App\OpcionesDePago', 'medios_id');
    }
    public function convenios()
    {
        return $this->belongsTo('App\Convenios', 'convenios_id');
    }
    
}
