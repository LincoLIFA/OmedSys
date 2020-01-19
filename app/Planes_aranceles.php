<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes_aranceles extends Model
{


    protected $fillable = [ 'id' , 'planes_id' , 'aranceles_id' ];


    public function planes_de_tratamiento()
    {
        return $this->belongsTo('App\PlanesDeTratamientos', 'planes_id');
    }
    public function aranceles()
    {
        return $this->belongsTo('App\Aranceles', 'aranceles_id');
    }
    
}
