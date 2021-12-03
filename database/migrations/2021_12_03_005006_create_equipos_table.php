<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_equipo',150);
            $table->binary('logo_equipo')->nullable();
            $table->string('nombre_manager');
            $table->string('apaterno_manager');
            $table->string('amaterno_manager');
            
            $table->foreignId('id_liga')->constrained('ligas');
            $table->foreignId('id_entrenador')->constrained('entrenadors');
            /*
            $table->unsignedBigInteger('liga_id');
            $table->unsignedBigInteger('entrenador_id')->unique()->nullable();

            $table->foreign('liga_id')->references('id')->on('ligas')->onDelete('set null');
            $table->foreign('entrenador_id')->references('id')->on('entrenadores')->onDelete('set null');
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
        Schema::dropIfExists('equipos');
    }
}
