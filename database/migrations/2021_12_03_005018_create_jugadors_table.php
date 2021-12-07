<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_jugador',60);
            $table->string('apaterno_jugador',60);
            $table->string('amaterno_jugador',60)->nullable();
            
            $table->foreignId('id_equipo')->constrained('equipos');
            $table->foreignId('id_posicion')->constrained('posicions');
            /*
            $table->unsignedBigInteger('equipo_id')->unique();
            $table->unsignedBigInteger('posicion_id')->unique();

            $table->foreign('equipo_id')->references('id')->on('equipos')->onDelete('set null');
            $table->foreign('posicion_id')->references('id')->on('posiciones')->onDelete('set null');
            */
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
