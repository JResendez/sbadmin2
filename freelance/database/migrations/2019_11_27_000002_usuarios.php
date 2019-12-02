<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
        Schema::create('usuarios', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('pais',30);
            $table->string('ciudad',30);
            $table->string('correo_electronico',30);
            $table->string('contraseña',10);
            $table->string('telefono',15);
            $table->string('status',30);
            $table->integer('id_rol')->unsigned;
            $table->timestamps();
          
            //$table->foreign('id_rol')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
