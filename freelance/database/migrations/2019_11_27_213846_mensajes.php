<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mensajes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {Schema::enableForeignKeyConstraints();
         Schema::create('mensajes', function (Blueprint $table) {
             $table->Increments('id');
             $table->string('descripcion',255);
             $table->integer('id_cliente')->unsigned;  
             $table->integer('id_proyect')->unsigned;  
             //$table->foreign('id_cliente')->references('id')->on('usuarios');
             //$table->foreign('id_proyect')->references('id_proyecto')->on('proyectos');
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
         Schema::dropIfExists('mensajes');
     }
}
