<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut_med');
            $table->string('medidentificacion');
            $table->string('mednombres');
            $table->string('medapellidos');
            $table->string('medespecialidad');
            $table->string('medtelefono');
            $table->string('medcorreo');
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
        Schema::drop('especialistas');
    }
}
