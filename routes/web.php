<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/', '/cidades', 301);
Route::resource('cidades', 'CidadeController');