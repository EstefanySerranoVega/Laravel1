<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class HomeController extends Controller
{
    //

    public function index(){

        
       $productos = Producto::paginate();
        return view('home',['productos_store' => $productos]);
    }
    public function chale(){
        
        return 'asd';
    }
}
