<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->unsignedBigInteger('prestaciones_id'); // Relación con categorias
            $table->foreign('prestaciones_id')->references('id')->on('prestaciones');
            $table->unsignedBigInteger('descuentos_id'); // Relación con categorias
            $table->foreign('descuentos_id')->references('id')->on('descuentos_por_cajas');   
            $table->unsignedBigInteger('medios_id'); // Relación con categorias
            $table->foreign('medios_id')->references('id')->on('opciones_de_pagos');
            $table->unsignedBigInteger('convenios_id'); // Relación con categorias
            $table->foreign('convenios_id')->references('id')->on('convenios');  
            $table->integer('iva');
            $table->integer('total');
            $table->integer('abono');
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
        Schema::dropIfExists('pagos');
    }
}
