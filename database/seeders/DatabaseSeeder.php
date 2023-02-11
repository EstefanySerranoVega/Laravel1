<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            //AlmacenSeeder::Class,
            //AccesoSeeder::Class,
            //RolSeeder::Class,
            //CategoriaSeeder::Class,
            //SucursalSeeder::Class,
            //PersonaSeeder::Class,
            //ClienteSeeder::Class,
            //UsuarioSeeder::Class,
            //ContrasenaSeeder::Class
            //ProductoSeeder::Class,
            PublicidadSeeder::Class,
            SliderSeeder::Class
        ]);
    }
}
