<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('citfecha');
            $table->time('cithora');
            $table->string('citPaciente');
            $table->string('citMedico');
            $table->string('citEsp');
            $table->string('citEstado');
            $table->string('citObservaciones');
            $table->string('confirmacion');
            $table->dateTime('start');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('citas');
    }
}
