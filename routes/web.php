<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/productos', function () {
    return "Hola Mundo";
});*/

Route::get('/productos', [App\Http\Controllers\productosController::class, 'index']);

Route::get('/productos/mostrar', [App\Http\Controllers\productosController::class, 'mostrar']);

Route::get('/productos/crear', [App\Http\Controllers\productosController::class, 'crear']);

Route::POST('/productos/dataformulario', [App\Http\Controllers\productosController::class, 'dataformulario'])->name('productos.formdata');

Route::get('/app',function(){
    return view('app',['nombre'=>'Adan Zaamir Cañas']);
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});