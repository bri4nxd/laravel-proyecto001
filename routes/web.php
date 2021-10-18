<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/hola-mundo', function(){
    return "Hola Bryan";
});

Route::post('/contacto', function(){
    return "formulario de contacto";
});

Route::get('/productos/{producto?}/{precio?}', function($producto="bebida", $precio=null){
    return view('productos', array(
        'producto' => $producto,
        'precio' => $precio
    ));
})->where([
    'producto' => '[A-Za-z]+',
    'precio' => '[0-9]+'
]);

Route::match(['get','post'],'/hola-mundo', function(){
    return "Hola bryan";
});