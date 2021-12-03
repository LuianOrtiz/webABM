<?php

namespace Database\Factories;

use App\Models\Liga;
use Illuminate\Database\Eloquent\Factories\Factory;

class LigaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Liga::class;

    public function definition()
    {
        return [
            'nombre_responsable' => $this->faker->firstName($gender = null), 
            'apaterno_responsable'=> $this->faker->lastName(), 
            'amaterno_responsable'=> $this->faker->lastName(), 
            'telefono_responsable'=> 4431786376, 
            'nombre_liga'=> $this->faker->sentence($nbWords=2, $variableNbWords=true), 
            'localidad'=> $this->faker->country(), 
            'ciudad'=> $this->faker->city(),
            'codigo_postal'=> $this->faker->postcode(),  
            'numero'=> $this->faker->numberBetween($int1 = 1, $int2 = 999), 
            'edad_minima'=> 11,
            'edad_maxima'=> 16
        ];
    }
}
