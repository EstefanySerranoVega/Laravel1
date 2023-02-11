<?php

namespace Database\Factories;

use App\Models\Publicidad;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publicidad>
 */
class PublicidadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Publicidad::Class;
     
    public function definition()
    {
        return [
            //
            'categoria_id' => $this->faker->numberBetween($min=1, $max=10),
            'usuario_id' => 1,
            'titulo_publicidad' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'texto_publicidad' => $this->faker->text($maxnbChar=220),
        ];
    }
}
