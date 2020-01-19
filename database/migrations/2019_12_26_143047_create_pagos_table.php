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
            $table->foreign('prestaciones_id')->references('id')->on('prestaciones')->onDelete('cascade');
            $table->unsignedBigInteger('descuentos_id'); // Relación con categorias
            $table->foreign('descuentos_id')->references('id')->on('descuentos_por_cajas')->onDelete('cascade');   
            $table->unsignedBigInteger('medios_id'); // Relación con categorias
            $table->foreign('medios_id')->references('id')->on('opciones_de_pagos')->onDelete('cascade');
            $table->unsignedBigInteger('convenios_id'); // Relación con categorias
            $table->foreign('convenios_id')->references('id')->on('convenios')->onDelete('cascade');  
            $table->integer('iva')->nullable();
            $table->integer('total');
            $table->integer('abono')->nullable();
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
