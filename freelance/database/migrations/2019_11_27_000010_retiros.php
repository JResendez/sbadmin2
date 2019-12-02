<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Retiros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('retiros', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_dev')->unsigned;  
            //$table->foreign('id_dev')->references('id')->on('usuarios');
            $table->float('cantidad',10,2);
            $table->integer('id_metodo')->unsigned;  
            //$table->foreign('id_metodo')->references('id')->on('metodo_retiro');
            $table->string('estatus',100);
            $table->integer('id_proyecto')->unsigned;  
            //$table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
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
        Schema::dropIfExists('retiros');
    }
}
