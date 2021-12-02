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
            'nombre_responsable' => $this->faker->randomElement(['Juan','Diego','Mario']), 
            'apaterno_responsable'=> $this->faker->randomElement(['Garcia','Salinas','Salgado']), 
            'amaterno_responsable'=> $this->faker->randomElement(['Diaz','Cortez','Mendez']), 
            'telefono_responsable'=> 4431746376, 
            'nombre_liga'=> $this->faker->randomElement(['Patz','Tarimbaro','Paracho']), 
            'localidad'=> 'Morelia', 
            'ciudad'=> $this->faker->randomElement(['Tlajomulco','Lomas azules','GarzaBlanca']),
            'codigo_postal'=> 58015,  
            'numero'=> 225, 
            'edad_minima'=> 11,
            'edad_maxima'=> 16
        ];
    }
}
