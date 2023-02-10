<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\persona>
 */
class PersonaFactory extends Factory
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
            'nombre_persona' => $this->faker->name(),
            'paterno_persona' => $this->faker->lastName(),
            'materno_persona' => $this->faker->lastName(),
            'telefono_persona' => $this->faker->phoneNumber(),
            'genero_persona' => $this->faker->title($gender = null|'male'|'female'),
            'nacimiento_persona' => $this->faker->date($format ='Y-m-d', $max = 'now')
        ];
    }
}
