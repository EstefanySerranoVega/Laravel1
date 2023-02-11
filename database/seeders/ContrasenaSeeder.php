<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Contrasena;

class ContrasenaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contrasena = new Contrasena();
        $contrasena->usuario_id = 1;
        $contrasena->contrasena = '123';
        $contrasena->save();
        
        $contrasena1 = new Contrasena();
        $contrasena1->usuario_id = 2;
        $contrasena1->contrasena = '123';
        $contrasena1->save();
        
        $contrasena2 = new Contrasena();
        $contrasena2->usuario_id = 2;
        $contrasena2->contrasena = '123';
        $contrasena2->save();
        

        $contrasena3 = new Contrasena();
        $contrasena3->usuario_id = 2;
        $contrasena3->contrasena = '123';
        $contrasena3->save();
        
        $contrasena4 = new Contrasena();
        $contrasena4->usuario_id = 1;
        $contrasena4->contrasena = '123';
        $contrasena4->save();

    }
}
