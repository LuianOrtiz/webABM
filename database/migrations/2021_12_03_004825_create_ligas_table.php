<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ligas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_responsable',60)->nullable();
            $table->string('apaterno_responsable',60)->nullable();
            $table->string('amaterno_responsable',60)->nullable();
            $table->string('telefono_responsable',10)->nullable();
            $table->string('nombre_liga', 100);
            $table->binary('logo_liga')->nullable();
            $table->string('localidad',60);
            $table->string('ciudad',100);
            $table->string('codigo_postal',6)->nullable();
            $table->string('colonia',150)->nullable();
            $table->integer('numero')->nullable();
            $table->integer('edad_minima')->nullable();
            $table->integer('edad_maxima')->nullable();
            
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
        Schema::dropIfExists('ligas');
    }
}
