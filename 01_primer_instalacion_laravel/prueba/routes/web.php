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

// En este archivo definimos las rutas de nuestra aplicación web
// Cada ruta es la combinacion de:
// a. El verbo/ método HTTP (get, post, put, patch, delete). Se define segun el método de Route al que llamemos.
// b. La URL. Que siempre empieza a partir de la carpeta public. / este es el primer parametro de Route::get
// c. Una acción. La función anónima que se ejecutará cuando se acceda a la ruta. (segundo parámetro)
// Puede ser una función anónima o un controlador. En este caso es una función anónima.
// Todas las acciones de una ruta DEBEN retornar una respuesta, que puede ser una vista/template de HTML,
// o alguna otra cosa como un objeto JSON.
// Si queremos retornar vistas, podemos usar la función view() que nos devuelve una vista.
// Este método recibe como argumento el nombre de la vista que queremos retornar. sin la extensión .php ni .blade.php
// Las vistas son templates de HTML que se encuentran en la carpeta resources/views

//Route::get('/', function () {
//    return view('welcome');
//});

//cambiamos la ruta de la home para que se abra con un controller.

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/quienes-somos', [\App\Http\Controllers\HomeController::class, 'about']);

Route::get('/peliculas/listado', [\App\Http\Controllers\MoviesController::class, 'index']);

Route::get('/admin/peliculas', [\App\Http\Controllers\AdminMoviesController::class, 'index']);
