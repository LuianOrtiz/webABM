<?php

namespace Database\Factories;

use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\Liga;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Equipo::class;

    public function definition()
    {
        return [
            'nombre_equipo'=> $this->faker->text($maxNbChars = 10),
            'nombre_manager' => $this->faker->firstName($gender = null),
            'apaterno_manager' => $this->faker->lastName(),
            'amaterno_manager' => $this->faker->lastName(),
            'id_liga' =>1,
            'id_entrenador'=> 1
            
            /* 
            'id_liga' => $this->faker->numberBetween($init1 = 0, $init2 = 5),
            'id_entrenador'=> $this->faker->numberBetween($init1 = 0, $init2 = 5) 
            */
        ];
    }
}
