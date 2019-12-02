<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {Schema::enableForeignKeyConstraints();
         Schema::create('servicios', function (Blueprint $table) {
             $table->Increments('id');
             $table->string('titulo',255);
             $table->string('descripcion',255);
             $table->float('monto',10,2);
             $table->string('estatus',100);
             $table->integer('cantidad');
             $table->string('medida_tiempo',100);
             $table->integer('id_proyect')->unsigned;
             
            // $table->foreign('id_proyect')->references('id_proyecto')->on('proyectos');
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
         Schema::dropIfExists('servicios');
     }

}
