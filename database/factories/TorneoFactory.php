<?php

namespace Database\Factories;

use App\Models\Torneo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TorneoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Torneo::class;

    public function definition()
    {
        return [
            'nombre_torneo'=> $this->faker->randomElement(['Telmex', 'Libertadores', 'Teleton']),
            'calendario'=>$this->faker->url(),
            'resultados'=>$this->faker->url()
        ];
    }
}
