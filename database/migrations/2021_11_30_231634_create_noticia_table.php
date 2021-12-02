<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia', function (Blueprint $table) {
            
            $table->bigIncrements('id_noticia');
            $table->string('titulo',150);
            $table->binary('portada')->nullable();
            $table->text('descripcion');
            $table->date('fecha_noticia');
            $table->string('nombre_autor'. 100);
            $table->string('apaterno_autor',100);
            $table->string('amaterno_autor0',60);
    
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
        Schema::dropIfExists('noticia');
    }
}
