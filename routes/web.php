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
    return view('index/index');
});

Route::get('formulario', 'FormularioController@formulario');
Route::get('formulario/restaurante', 'FormularioController@formulario');
Route::post('/', array('uses' => 'FormularioController@enviar'));

