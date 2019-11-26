<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescuentosPorCaja extends Model
{
    protected $fillable = [ 'id','nombre', 'descuento'];
}
