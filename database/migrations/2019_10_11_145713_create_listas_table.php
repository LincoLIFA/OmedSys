<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('events_id'); // Relación con categorias
            $table->foreign('events_id')->references('id')->on('events');
            $table->unsignedBigInteger('paciente_id'); // Relación con categorias
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unsignedBigInteger('medico_id'); // Relación con categorias
            $table->foreign('medico_id')->references('id')->on('especialistas');
            $table->unsignedBigInteger('especialidades_id'); // Relación con categorias
            $table->foreign('especialidades_id')->references('id')->on('especialidades');
            $table->string('estado');
            $table->string('observaciones');
            $table->string('confirmacion');
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
        Schema::dropIfExists('listas');
    }
}
