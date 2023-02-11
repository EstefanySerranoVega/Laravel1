<?php

namespace Database\Factories;
use App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Producto::Class;

    public function definition()
    {
        return [
            //
            'categoria_id' => $this->faker->numberBetween($min = 1, $max=10),
            'nombre_producto' => $this->faker->name(),
            'img_producto' => $this->faker->imageUrl(),
            'marca_producto' => $this->faker->company(),
            'industria_producto' => $this->faker->country(),
            'codigo_producto' => $this->faker->ean8(),
            'descripcion_producto' => $this->faker->text($maxNbChars = 350)
        ];
    }
}
