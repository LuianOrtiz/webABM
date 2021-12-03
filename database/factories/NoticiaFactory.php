<?php

namespace Database\Factories;

use App\Models\Noticia;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Noticia::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence($nbWords = 2, $variableNbWords=true),
            'descripcion' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences=true),
            'fecha_noticia'=> $this->faker->date($format = 'Y-m-d', $max='now'),
            'nombre_autor' => $this->faker->firstName($gender = null),
            'apaterno_autor' => $this->faker->lastName(),
            'amaterno_autor' => $this->faker->lastName()

        ];
    }
}
