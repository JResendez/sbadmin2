<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('tickets', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('asunto',20);
            $table->string('estatus',20);
            $table->string('descripcion',255);
          $table->integer('id_cliente')->unsigned;
            $table->timestamps();
          
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
        Schema::dropIfExists('tickets');
    }
}
