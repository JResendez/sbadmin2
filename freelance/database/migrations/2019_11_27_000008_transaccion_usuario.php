<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaccionUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('transaccion_usuario', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_usuario')->unsigned;  
            //$table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->string('tipo_operacion',100);
            $table->decimal('cantidad',10,3);
            $table->string('mensaje',100);
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
        Schema::dropIfExists('transaccion_usuario');
    }
}
