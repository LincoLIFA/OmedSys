<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescuentosPorCajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descuentos_por_cajas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
<<<<<<< HEAD
            $table->string('tasa');            
=======
            $table->string('descuento');
>>>>>>> 8b6717f4125ee46a222e0191b5175ddd24a93b16
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descuentos_por_cajas');
    }
}
