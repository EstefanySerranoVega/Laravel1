<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Sucursal;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sucursal = new Sucursal();
        $sucursal->almacen_id = 1;
        $sucursal->nombre_sucursal = 'Sucursal_1';
        $sucursal->direccion_sucursal = 'Primer anillo y Av. Beni';
        $sucursal->save();
    }
}
