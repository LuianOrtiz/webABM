<?php

namespace Database\Factories;

use App\Models\Jugador;
use Illuminate\Database\Eloquent\Factories\Factory;

class JugadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Jugador::class;

    public function definition()
    {
        return [
            'nombre_jugador' => $this->faker->firstNameMale(),
            'apaterno_jugador' => $this->faker->lastName(),
            'amaterno_jugador' => $this->faker->lastName(),
            'id_equipo' => 1,
            'id_posicion' => 1,
            /*
            'id_equipo' => $this->faker->numberBetween($int1 = 1, $int2=9),
            'id_posicion' => $this->faker->numberBetween($int1 = 0, $int2=4),
            */
        ];
    }
}
