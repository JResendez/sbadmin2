<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Gastos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {Schema::enableForeignKeyConstraints();
        Schema::create('gastos', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('id_persona')->unsigned;
            $table->string('motivo',20);
            $table->string('descripcion',255);
            $table->datetime('fecha_hora');
            $table->decimal('cantidad');
            $table->integer('id_proyecto')->unsigned;
            
            //$table->foreign('id_proyecto')->references('id_proyecto')->on('proyectos');
            //$table->foreign('id_persona')->references('id')->on('usuarios');
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
        Schema::dropIfExists('gastos');
    }
}
