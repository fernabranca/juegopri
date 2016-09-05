<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos',function(Blueprint $table){
                $table->increments('id');
                $table->string('contrincante',100);
                $table->timestamp('fecha_hora')->nullable();
                $table->boolean('jugado');
                $table->timestamp('fecha_liga')->nullable();
                $table->string('resultado',10);
                $table->integer('gol_favor');
                $table->integer('gol_contra');
                $table->string('cancha',50);
                $table->integer('id_jugador')->unsigned();
                $table->foreign('id_jugador')->references('id')->on('jugadores');
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
    }
}
