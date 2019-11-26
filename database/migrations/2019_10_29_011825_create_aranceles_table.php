<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArancelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aranceles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('procedimientos');
            $table->integer('precios');
            $table->string('comentarios');
            $table->unsignedBigInteger('medico_id'); // Relación con categorias
            $table->foreign('medico_id')->references('id')->on('especialistas');
            $table->unsignedBigInteger('especialidades_id'); // Relación con categorias
            $table->foreign('especialidades_id')->references('id')->on('especialidades');
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
        Schema::dropIfExists('aranceles');
    }
}
