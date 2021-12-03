<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenadors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_entrenador',60);
            $table->string('apaterno_entrenador',60);
            $table->string('amaterno_entrenador',60);
            $table->date('fecha_nacimiento');

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
        Schema::dropIfExists('entrenadores');
    }
}
