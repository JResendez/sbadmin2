<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MetodoRetiro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();

        Schema::create('metodo_retiro', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre_metodo',20);
            $table->string('descripcion',255);
            $table->decimal('cantidad_Max');
            $table->decimal('carga_fija');
            $table->decimal('cantidad_Min');
            $table->string('días_proceso');
            $table->string('estatus');
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
        Schema::dropIfExists('metodo_retiro');
    }
}
