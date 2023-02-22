<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::Class,'index'])->name('home');

Route::controller(StoreController::Class)->group(function(){
    Route::get('/store', 'index')->name('store.index');
    Route::get('/store/shopcart/{producto}','shopcart')->name('store.shopcart');
    Route::get('/store/{producto}', 'show')->name('store.show');
    Route::get('/store/{categoria}', 'category')->name('store.category');
});

Route::controller(CustomerController::Class)->group(function(){
    Route::get('/customer/login','index')->name('customer.login');
    Route::get('/customer/singup','singup')->name('customer.singup');
    Route::post('/customer/login','authenticate')->name('customer.authenticate');
    Route::get('/customer/profile/{id}','profile')->name('customer.profile');
    Route::get('/customer/show','show')->name('customer.show');
    Route::post('/customer/edit','edit')->name('customer.edit');
    Route::put('/custome/update','update')->name('customer.update');

});

Route::controller(AdminController::Class)->group(function(){
    Route::get('/admin/dashboard','dashboard')->name('admin.dashboard');
    Route::get('/admin/almacen/index','index')->name('almacen.index');
    Route::get('/admin/almacen/productos','productos')->name('almacen.productos');
   // Route::get('/admin/almacen/')->name();
});

/*

Route::get('/customer/singup',[CustomerController::Class,'singup']);
Route::get('/customer/login',[CustomerController::Class,'index']);

*/


