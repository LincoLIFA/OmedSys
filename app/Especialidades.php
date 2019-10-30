<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class especialidades extends Model
{

    public function citas()
    {
        return $this->hasMany('App\Citas');
    }

    public function listas()
    {
        return $this->hasMany('App\Listas');
    }   
     
    public function aranceles()
    {
        return $this->hasMany('App\Aranceles');
    }

    protected $fillable = [ 'id','espNombre'];
}
