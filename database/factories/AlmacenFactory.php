<?php

namespace Database\Factories;

use App\Models\Almacen;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Almacen>
 */
class AlmacenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

protected $model = Almacen::Class;

    public function definition()
    {
        return [
            //
            'nombre_almacen' => $this->faker->name()
        ];
    }
}
