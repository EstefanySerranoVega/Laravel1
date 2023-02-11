<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rol = new Rol();
        $rol->nombre_rol = 'Administrador';
        $rol->accesos_id = 1;
        $rol->save();

        
        $rol1 = new Rol();
        $rol1->nombre_rol = 'Colaborador';
        $rol1->accesos_id = 1;
        $rol1->save();

        
        $rol2 = new Rol();
        $rol2->nombre_rol = 'Cliente';
        $rol2->accesos_id = 1;
        $rol2->save();

    }
}
