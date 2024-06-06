<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function () {
    return view('hello');
});

// {} serve para ler uma variável na rota, que deve ser passada como parâmetro na function()
Route::get('hello/{nome}', function ($nome) {
    return "Olá {$nome}";
});