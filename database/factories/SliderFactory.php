<?php

namespace Database\Factories;

use App\Models\Slider;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Slider::Class;
     
    public function definition()
    {
        return [
            //
            'producto_id' => $this->faker->numberBetween($min=1, $max=50),
            'usuario_id' => 1,
            'titulo_slider' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'texto_slider' => $this->faker->text($maxnbChar=250),
       
        ];
    }
}
