<?php

namespace Database\Factories;

use App\Models\Posicion;
use Illuminate\Database\Eloquent\Factories\Factory;

class PosicionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Posicion::class;

    public function definition()
    {
        return [
            'posicion'=> $this->faker->randomElement(['Receptor','Primera Base', 'Segunda Base', 'Tercera Base',
            'Campo Corto', 'Jardinero Izquiero'])
        ];
    }
}
