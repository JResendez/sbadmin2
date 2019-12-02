<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Facturas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('facturas', function (Blueprint $table) {
            $table->Increments('id_factura');
            $table->string('asunto',20);
            $table->string('estatus',20);
            $table->string('descripcion',255);
            $table->decimal('cantidad_total');
            $table->decimal('descuento');
            $table->datetime('fecha_generada');
            $table->integer('pago_id')->unsigned();
            $table->integer('proyecto_id')->unsigned();
          
           // $table->foreign('pago_id')->references('id_metodoPago')->on('metodo_pago');
            //$table->foreign('proyecto_id')->references('id_proyecto')->on('proyectos');
          
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
        Schema::dropIfExists('facturas');
    }
}
