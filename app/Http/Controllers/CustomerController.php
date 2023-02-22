<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Persona;
use App\Models\Cliente;
use App\Models\Usuario;
use App\Models\Contrasena;

class CustomerController extends Controller
{
    //

    public function index(){
       // return 'estás en la tienda, ahre';
       return view('customer.login');
    }

    public function singup(){
        //return $producto;
       return view('customer.singup');
    }

    public function authenticate(Request $request){
        $request->validate([
            'name' => 'required',
            'paterno' => 'required',
            'materno' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
        $persona = new Persona();
        $usuario = new Usuario();
        $cliente = new Cliente();
        $contrasena = new Contrasena();

        $persona->nombre_persona = $request->name;
        $persona->paterno_persona = $request->paterno;
        $persona->materno_persona = $request->materno;
        $persona->genero_persona = $request->genero;
        $persona->telefono_persona = $request->telefono;
        $persona->nacimiento_persona = $request->fnac;
         if ($persona->save()){

        $cliente->persona_id = $persona->id;
        $cliente->email_cliente = $request->email;
        $cliente->direccion_cliente = $request->direccion;
        $cliente->save;

        $usuario->persona_id = $persona->id;
        $usuario->rol_id = 3;
        $usuario->nombre_usuario = $request->username;
        $usuario->profile_usuario = 'avatar1.png';
        $usuario->save();

        $contrasena->usuario_id = $usuario->id;
        $contrasena->contrasena = $request->contrasena;
        $contrasena->save();

         }else{
            return 'no se pudo guardar';
         }
        //return $request;
       $productos = Producto::paginate();
       
        return redirect()->route('home');

    }
    public function profile($id){
        $usuario = Usuario::find($id);
        return view('customer.profile');
    }
    public function show(){}

    public function edit(){}

    public function update(){

    }

}
