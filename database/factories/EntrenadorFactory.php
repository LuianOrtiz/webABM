<?php

namespace Database\Factories;

use App\Models\Entrenador;
use Illuminate\Database\Eloquent\Factories\Factory;

class EntrenadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Entrenador::class;

    public function definition()
    {
        return [
            'nombre_entrenador'=> $this->faker->firstNameMale(),
            'apaterno_entrenador' => $this->faker->lastName(),
            'amaterno_entrenador' => $this->faker->lastName(),
            'fecha_nacimiento' => $this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
