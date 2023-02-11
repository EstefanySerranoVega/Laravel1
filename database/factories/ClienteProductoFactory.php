<?php

namespace Database\Factories;

use App\Models\ClienteProducto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cliente_producto>
 */
class ClienteProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ClienteProducto::Class;

    public function definition()
    {
        return [
            //
     /*
            'cliente_id' => $this->faker->numberBetween($min = 1, $max = 15),
            'producto_id' => $this->faker->numberBetween($min = 1, $max = 100),
            'tipo_pago_id' => $this->faker->numberBetween($min = 1, $max = 5),

            'cantidad_cp' => $this->faker->randemElement([1,2,3,4,5,6,7,8]),
            'total_cp' => $this->faker-> 
     
     */
        ];
    }
}
