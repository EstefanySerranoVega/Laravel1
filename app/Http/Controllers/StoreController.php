<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //

    public function index(){
       // return 'estás en la tienda, ahre';
       $productos = array('teclado', 'mouse', 'mousepad');
       return view('store', ['productos_store' => $productos]);
    }

}
