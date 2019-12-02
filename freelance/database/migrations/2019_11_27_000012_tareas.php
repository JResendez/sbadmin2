<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('tareas', function (Blueprint $table) {
            
            $table->Increments('id_tarea');
            $table->integer('id_proyecto')->unsigned();
            $table->integer('id_desarrollador')->unsigned();
            $table->string('titulo',20);
            $table->string('descripcion',255);
            $table->integer('estatus');  // tarea realizada, tarea pendiente       
            $table->datetime('fecha_fin');
            $table->integer('id_milestone')->unsigned();
          
            //$table->foreign('id_milestone')->references('id')->on('milestone');  
            //$table->foreign('id_proyecto')->references('id_proyect')->on('milestone');
            //$table->foreign('id_desarrollador')->references('id')->on('usuarios');
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
        Schema::dropIfExists('tareas');
    }
}
