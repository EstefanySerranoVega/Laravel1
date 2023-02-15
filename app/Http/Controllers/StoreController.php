<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class StoreController extends Controller
{
    //

    public function index(){
       // return 'estás en la tienda, ahre';
       $productos = Producto::paginate();
       return view('store/store', ['productos_store' => $productos]);
    }

    public function show($id){
        $producto = Producto::find($id);
        //return $producto;
       return view('store/producto',['producto' => $producto]);
    }

    public function shopcart($producto){
       // return $producto;
        return view('store/shopcart' , compact('item'));
    }

}
