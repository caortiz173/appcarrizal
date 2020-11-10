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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo', 'demoController@sumar');

Route::get('/generoM', 'estudiantesController@punto1');
Route::get('/generoF', 'estudiantesController@punto2');
Route::get('/mayores', 'estudiantesController@punto3');
Route::get('/mostrar', 'estudiantesController@punto4');
Route::get('/generoMyF', 'estudiantesController@punto5');

Route::get('/guardar', 'demoController@guardar');


Route::post('/api/estudiantes/guardar', 'estudiantesController@store')->name('guardar');
Route::put('/api/estudiantes/actualizar', 'estudiantesController@update')->name('actualizar');
Route::delete('/api/estudiantes/eliminar', 'estudiantesController@destroy')->name('eliminar');
