<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->bigIncrements('id_jugador');
            $table->string('nombre_jugador',60);
            $table->string('apaterno_jugador',60);
            $table->string('amaterno_jugador',60);
            
            $table->unsignedBigInteger('id_equipo')->nullable();
            $table->unsignedBigInteger('id_posicion')->nullable();

            $table->foreign('id_equipo')->references('id_equipo')->on('equipos')->onDelete('set null');
            $table->foreign('id_posicion')->references('id_posicion')->on('posicion')->onDelete('set null');
            
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
        Schema::dropIfExists('jugadores');
    }
}
