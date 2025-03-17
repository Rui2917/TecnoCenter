<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/sobre', function () {
    return view('Sobre');
});

Route::get('/marcas', function () {
    return view('marcas');
});

Route::get('/contatos', function () {
    return view('contatos');
});