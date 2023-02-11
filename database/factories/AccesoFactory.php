<?php

namespace Database\Factories;

use App\Models\Acceso;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acceso>
 */
class AccesoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Acceso::Class;

    public function definition()
    {
        return [
            //
            'nombre_accesos' => $this->faker->name()
        ];
    }
}
