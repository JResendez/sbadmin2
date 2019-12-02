<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pagos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('pagos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('cliente')->unsigned;  
          //$table->foreign('cliente')->references('id')->on('usuarios');
            $table->float('cantidad',10,2);
            $table->integer('id_metodo')->unsigned;  
         // $table->foreign('id_metodo')->references('id')->on('metodo_pago');
            $table->string('estatus',100);
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
        Schema::dropIfExists('pagos');
    }
}
