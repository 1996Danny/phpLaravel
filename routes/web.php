<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiPrimerControlador;

// Route::get('/', function () {
//     return 'Hola mundo';
// });

// Route::get('/saludo', function (){
//     return 'Buenos días';
// });

Route::get('/', [MiPrimerControlador::class, 'raiz']);
Route::get('/saludo', [MiPrimerControlador::class, 'saludo']);
Route::get('/misNoticias', [MiPrimerControlador::class, 'misNoticias']);
Route::get('/miHistoria', [MiPrimerControlador::class, 'miHistoria']);
Route::get('/clientes', [MiPrimerControlador::class, 'misClientes']);