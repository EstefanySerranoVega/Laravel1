<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Almacen;

class AlmacenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $almacen = new Almacen();
        $almacen->nombre_almacen = 'Almacen_1';
        $almacen->save();
    }
}
