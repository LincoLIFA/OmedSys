<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class especialidades extends Model
{

    public function citas()
    {
        return $this->hasMany('App\Citas');
    }

    protected $fillable = [ 'id','espNombre'];
}
