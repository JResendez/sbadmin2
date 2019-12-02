<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketsRespuesta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('tickets_respuesta', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('descripcion',255);
            $table->integer('id_ticket')->unsigned;
            $table->integer('id_cliente')->unsigned;
            $table->timestamps();
          
            //$table->foreign('id_ticket')->references('id')->on('tickets');
            //$table->foreign('id_cliente')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets_respuesta');
    }
}
