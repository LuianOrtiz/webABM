<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//el metodo up creata la tabla
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//Integer unsigned increment
            $table->string('name',100);//varchar 
            $table->string('email')->unique(); //espeficica que el correo es unico
            $table->timestamp('email_verified_at')->nullable(); //guarda fechas
            $table->string('password');
            $table->rememberToken(); //almacena un token, cuando el usuario quiera mantener la sesión iniciada
            $table->timestamps(); //created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//elimina la tabla
    {
        Schema::dropIfExists('users');
    }
}

//para crear las migraciones
//php artisan migrate para crear las tablas que se encuentran en "migration" -> desde la linea de comandos

//para crear nuestras propias migraciones
//php artisan make:migration ligas

//reversion de la ultima migracion
//php artisan migrate:rollback 


//creacion de una migracion con buenas practicas
//php artisan make:migration create_ligas_table

//cuando hay un cambio en una columna
//php artisan migrate:fresh 
//no se recomienda ya que es un metodo destructivo, es decir borra también los registros de la base de datos

//Cuando se desea cambiar las tablas una a una
//php artisan migrate:regresh
//ejecuta el metodo "down" y despues el "up" de cada una de las tablas, una por una

//Para agregar migraciones a las columnas
//php artisan make:migration add_nombreColumnaNueva_to_tablaDeseada_table;


//Para eliminar todos las  tablas
//php artisan migrate:reset 
//