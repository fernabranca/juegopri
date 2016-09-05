<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores',function(Blueprint $table){
                $table->increments('id');
                $table->string('nombre',20);
                $table->string('apellido',20);
                $table->integer('dni');
                $table->integer('matricula_jugador');
                $table->timestamp('fecha_nacimiento');
                $table->string('direccion',50);
                $table->integer('telefono');
                



        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('jugadores');
    }
}
