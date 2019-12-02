<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();
        Schema::create('proyectos', function (Blueprint $table) {
            $table->Increments('id_proyecto');
            $table->string('nombre_proyecto',100);
            $table->datetime('fecha_Inicio');
            $table->datetime('fecha_Fin');
            $table->string('estatus',20);
            $table->string('descripcion',255);
            $table->integer('id_desarrollador')->unsigned;
            $table->integer('id_cliente')->unsigned;
          
            //$table->foreign('id_desarrollador')->references('id')->on('usuarios');
            //$table->foreign('id_cliente')->references('id')->on('usuarios');
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
        Schema::dropIfExists('proyectos');
    }
}
