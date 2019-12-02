<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Issues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('issues', function (Blueprint $table) {
            $table->Increments('id_issues');
            $table->string('estatus',20);
            $table->string('descripcion',255);
            $table->integer('creador_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
          
          //  $table->foreign('creador_id')->references('id')->on('usuarios');
           // $table->foreign('proyecto_id')->references('id_proyecto')->on('proyectos');

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
        Schema::dropIfExists('issues');
    }
}
