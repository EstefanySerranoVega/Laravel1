<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Proveedor::Class;

    public function definition()
    {
        return [
            //
            'empresa_proveedor' => $this->faker->company(),
            'correo_proveedor' => $this->faker->companyEmail()
        ];
    }
}
