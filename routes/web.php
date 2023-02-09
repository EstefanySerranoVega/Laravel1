<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return 'Estás en la página principal de prueba';
});


Route::get('/store', [StoreController::Class,'index']);

Route::get('/store/{producto}', function($producto){
    return "estás viendo el producto $producto";
});

