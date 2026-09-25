<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//view criada em /views
Route::get('/minhaview', function() {
    return view('minhaview');
});

//Retornar texto
Route::get('/texto', function() {
    return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
});

//Parametro convencional
Route::view('/parametrocomum', 'param', ['item'=>'Texto do parâmetro']);

//Rota com parâmetro route
Route::get('/paramroute/{parametro}', function($parametro){
    return view('paramroute',['varParam'=> $parametro]);
});

//Rota com parâmetro route opcional
Route::get('/optional/{optional?}', function($optional = null) {
    return view('optionalparam', ['varoptional'=>$optional]);
});

//Acionado quando há algum erro ao acessar alguma rota
Route::fallback(function() {
    return 'Erro ao acessar rota';
});