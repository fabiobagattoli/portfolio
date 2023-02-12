<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes -
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

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/alguns-comandos', function () {
    return view('comandos');
});

Route::get('/sobre-mim', function () {
    return view('sobre');
});

Route::get('/projetos-ativos', function () {
    return view('projetosativos');
});

Route::get('/projetos-de-estudo', function () {
    return view('projetosdeestudo');
}); 
