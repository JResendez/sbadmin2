<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Milestone extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('milestone', function (Blueprint $table) {
            
            $table->Increments('id');
            $table->integer('id_proyecto')->unsigned();
            $table->string('titulo',20);
            $table->string('descripcion',255);
            $table->datetime('fecha_inicio');
            $table->datetime('fecha_fin');
          
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
        Schema::dropIfExists('milestone');
    }
}
