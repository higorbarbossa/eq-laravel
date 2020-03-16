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
})->name('welcome');


Route::resource('funcionario', 'FuncionarioController')->except('create', 'show');

Route::resource('setor', 'SetorController')->except('create', 'show');


//Route::resource('contato', 'ContatoController')->only('index', 'show', 'destroy');
