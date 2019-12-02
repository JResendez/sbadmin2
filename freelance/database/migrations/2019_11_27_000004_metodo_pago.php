<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MetodoPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodo_pago', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre_metodo',20);
            $table->string('descripcion',255);
            $table->decimal('cantidad_Max');
            $table->decimal('carga_fija');
            $table->decimal('cantidad_Min');
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
        Schema::dropIfExists('metodo_pago');
    }
}
