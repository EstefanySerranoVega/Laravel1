<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'persona_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'rol_id' => $this->faker->numberBetween($min = 1, $max = 4),
            
            'nombre_usuario' => $this->faker->userName(),
            'profile_usuario' => $this->faker->imageUrl(),

        ];
    }
}
