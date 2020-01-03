<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesArancelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_aranceles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('planes_id'); // Relación con categorias
            $table->foreign('planes_id')->references('id')->on('planes_de_tratamientos');
            $table->unsignedBigInteger('aranceles_id'); // Relación con categorias
            $table->foreign('aranceles_id')->references('id')->on('aranceles');
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
        Schema::dropIfExists('planes_aranceles');
    }
}
