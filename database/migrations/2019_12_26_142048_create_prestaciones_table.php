<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fichas_id'); // Relación con categorias
            $table->foreign('fichas_id')->references('id')->on('fichas');
            $table->unsignedBigInteger('paciente_id'); // Relación con categorias
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unsignedBigInteger('medico_id'); // Relación con categorias
            $table->foreign('medico_id')->references('id')->on('especialistas');
            $table->unsignedBigInteger('especialidades_id'); // Relación con categorias
            $table->foreign('especialidades_id')->references('id')->on('especialidades');   
            $table->unsignedBigInteger('aranceles_id'); // Relación con categorias
            $table->foreign('aranceles_id')->references('id')->on('aranceles');                    
            $table->string('comentarios');
            $table->string('estado');
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
        Schema::dropIfExists('prestaciones');
    }
}
