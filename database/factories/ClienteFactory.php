<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente>
 */
class ClienteFactory extends Factory
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
            'persona_id' => $this->faker->numberBetween($min = 1, $max = 20),
            'email_cliente' => $this->faker->email(),
            'direccion_cliente' => $this->faker->country()
        ];
    }
}
