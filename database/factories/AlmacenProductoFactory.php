<?php

namespace Database\Factories;

use App\Models\AlmacenProducto;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlmacenProducto>
 */
class AlmacenProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = AlmacenProducto::Class;

    public function definition()
    {
        return [
            //
            'usuario_id' => 1,
            'producto_id' => $this->faker->numberBetween($min=1,$max=50),
            'proveedor_id' => $this->faker->NumberBetween($min = 1, $max = 10),
            'almacen_id' => 1,
            'pventa_ap' => $this->faker->randomFloat( $min = 20, $max = 200),
            'pcompra_ap' => $this->faker->randomFloat($min = 10, $max=20),
            'lote_ap' => 'N-00001',
            'cantidad_ap' => 10,
            'ingreso_ap' => date_time_set()
        ];
    }
}
