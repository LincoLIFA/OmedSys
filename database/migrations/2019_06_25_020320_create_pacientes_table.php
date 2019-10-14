<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('pacidentificacion');
            $table->string('pacnombre');
            $table->string('pacapellidoP');
            $table->string('pacapellidoM');
            $table->date('pacfechaN');
            $table->string('pacsexo');
            $table->string('paccorreo');
            $table->string('pactelefono');
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
        Schema::drop('pacientes');
    }
}
