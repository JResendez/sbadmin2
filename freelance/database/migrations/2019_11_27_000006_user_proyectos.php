<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
    {
          Schema::enableForeignKeyConstraints();
        Schema::create('user_proyectos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre_proyecto',100);
            $table->string('estatus',50);
            $table->integer('id_proyecto')->unsigned;
            $table->integer('id_desarrollador')->unsigned;
            $table->integer('rol')->unsigned;
          
            //$table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
            //$table->foreign('id_desarrollador')->references('id')->on('usuarios');
            //$table->foreign('rol')->references('id_rol')->on('usuarios');
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
        Schema::dropIfExists('user_proyectos');
    }
}
