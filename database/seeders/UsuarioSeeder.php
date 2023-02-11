<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario = new Usuario();
        $usuario->persona_id = 1;
        $usuario->rol_id =1;
        $usuario->nombre_usuario = 'admin';
        $usuario->profile_usuario = 'avatar1.png';
        $usuario->save();
        
        $usuario1 = new Usuario();
        $usuario1->persona_id = 2;
        $usuario1->rol_id =2;
        $usuario1->nombre_usuario = 'colab1';
        $usuario1->profile_usuario = 'avatar1.png';
        $usuario1->save();
        
        $usuario2 = new Usuario();
        $usuario2->persona_id = 3;
        $usuario2->rol_id =3;
        $usuario2->nombre_usuario = 'cliente1';
        $usuario2->profile_usuario = 'avatar1.png';
        $usuario2->save();
        
        $usuario3 = new Usuario();
        $usuario3->persona_id = 4;
        $usuario3->rol_id =3;
        $usuario3->nombre_usuario = 'cliente2';
        $usuario3->profile_usuario = 'avatar1.png';
        $usuario3->save();
        
        $usuario4 = new Usuario();
        $usuario4->persona_id = 5;
        $usuario4->rol_id =3;
        $usuario4->nombre_usuario = 'cliente3';
        $usuario4->profile_usuario = 'avatar1.png';
        $usuario4->save();
        


    }
}
