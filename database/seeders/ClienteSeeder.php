<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cliente = new Cliente();
        $cliente->persona_id = 3;
        $cliente->email_cliente = 'cliente1@gmail.com';
        $cliente->direccion_cliente = 'Santa Cruz';
        $cliente->save();
        
        $cliente1 = new Cliente();
        $cliente1->persona_id = 4;
        $cliente1->email_cliente = 'cliente2@gmail.com';
        $cliente1->direccion_cliente = 'Santa Cruz';
        $cliente1->save();
        
        $cliente2 = new Cliente();
        $cliente2->persona_id = 5;
        $cliente2->email_cliente = 'cliente3@gmail.com';
        $cliente2->direccion_cliente = 'Santa Cruz';
        $cliente2->save();
    }
}
