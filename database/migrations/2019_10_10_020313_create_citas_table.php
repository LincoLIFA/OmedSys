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
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('events_id'); // Relación con categorias
            $table->foreign('events_id')->references('id')->on('events')->onDelete('cascade');
            $table->unsignedBigInteger('paciente_id'); // Relación con categorias
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onDelete('cascade');
            $table->unsignedBigInteger('medico_id'); // Relación con categorias
            $table->foreign('medico_id')->references('id')->on('especialistas')->onDelete('cascade');
            $table->unsignedBigInteger('especialidades_id'); // Relación con categorias
            $table->foreign('especialidades_id')->references('id')->on('especialidades')->onDelete('cascade');                    
            $table->string('estado');
            $table->string('observaciones')->nullable();
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
        Schema::drop('citas');
    }
}
