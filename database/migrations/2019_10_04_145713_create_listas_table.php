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
            $table->increments('id');
            $table->date('lisfecha');
            $table->time('lishora');
            $table->string('lisPaciente');
            $table->string('lisMedico');
            $table->string('lisEsp');
            $table->string('lisEstado');
            $table->string('lisObservaciones');
            $table->string('confirmacion');
            $table->dateTime('start');
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
