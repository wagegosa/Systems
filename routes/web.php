<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/empleados', 'EmpleadosController@index');
//Route::get('/empleados/Create', 'EmpleadosController@create');
//Creamos todas las rutas necesarias del controlador
Route::resource('/', 'EmpleadosController');