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

Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome){
    echo "Olá! Seja Bem Vindo, $nome $sobrenome!";
});

Route::get('/seunome/{nome?}/', function($nome=null){
    if(isset($nome))
        return "Olá! Seja Bem Vindo, $nome!";  
    return "Voce nao digitou nenhum nome";

});
