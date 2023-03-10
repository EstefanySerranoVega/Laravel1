<?php

namespace Database\Factories;

use App\Models\TipoPago;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tipo_pago>
 */
class TipoPagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = TipoPago::Class;
     
    public function definition()
    {
        return [
            //
            'nombre_tp' => $this->faker->creditCardType()
        ];
    }
}
