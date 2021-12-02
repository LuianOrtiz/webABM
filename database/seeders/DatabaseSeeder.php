<?php

namespace Database\Seeders;

use App\Models\Liga;
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

    }
}

//para ejecutar el seeder
//php artisan db:seed 

//para crear otra estructura de seeder
//php artisan make:seeder LigasSeeder

//para recrear las tablas y ejecutar los seeders
//php artisan migrate:fresh --seed
