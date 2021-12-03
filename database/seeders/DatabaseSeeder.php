<?php

namespace Database\Seeders;

use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Liga;
use App\Models\Noticia;
use App\Models\Posicion;
use App\Models\Torneo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Liga::factory(20)->create();
        Posicion::factory(6)->create();
        Noticia::factory(5)->create();
        Torneo::factory(3)->create();
        Entrenador::factory(4)->create();
        Equipo::factory(8)->create();
        Jugador::factory(14)->create();

    }
}

//para ejecutar el seeder
//php artisan db:seed 

//para crear otra estructura de seeder
//php artisan make:seeder LigasSeeder

//para recrear las tablas y ejecutar los seeders
//php artisan migrate:fresh --seed
