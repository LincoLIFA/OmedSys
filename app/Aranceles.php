<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aranceles extends Model
{
    public function especialistas()
    {
        return $this->belongsTo('App\Especialistas', 'especialistas_id');
    }
    public function especialidades()
    {
        return $this->belongsTo('App\Especialidades', 'especalidades_id');
    }
}
