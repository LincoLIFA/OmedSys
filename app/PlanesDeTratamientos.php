<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanesDeTratamientos extends Model
{
    protected $fillable = [ 'id'  ,'nombre', 'medico_id' , 'especialidades_id' ];
    
   
    
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
