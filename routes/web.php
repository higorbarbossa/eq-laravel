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


Route::resource('setor', 'SetorController')->only('index', 'show');

Route::resource('funcionario', 'FuncionarioController');

Route::resource('contato', 'ContatoController')->only('index', 'show', 'destroy');
