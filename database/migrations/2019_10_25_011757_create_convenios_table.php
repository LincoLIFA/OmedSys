<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConveniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convenios', function (Blueprint $table) { 
            $table->bigIncrements('id');
            $table->string('fecha');
            $table->string('empresa');
            $table->string('descuento');
            $table->string('observacion');
            $table->string('contacto');
<<<<<<< HEAD:database/migrations/2019_10_07_011757_create_convenios_table.php
            $table->integer('telefono');
            $table->string('correo');
=======
>>>>>>> 8b6717f4125ee46a222e0191b5175ddd24a93b16:database/migrations/2019_10_25_011757_create_convenios_table.php
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
        Schema::dropIfExists('convenios');
    }
}
