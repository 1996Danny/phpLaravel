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
Route::get('/cliente/{idCliente}', [MiPrimerControlador::class, 'filtrarClintePorrId']);
Route::get('/clientedni/{dni}', [MiPrimerControlador::class, 'filtrarClientePorDni']);
Route::get('/clientes/apellido/{apellido}', [MiPrimerControlador::class, 'filtrarNombreCoincidencia']);
Route::get('/clientes/dni/{dni}', [MiPrimerControlador::class, 'dniMayorIgual']);
Route::get('/pedidos', [MiPrimerControlador::class, 'misPedidos']);
Route::get('/comidas', [MiPrimerControlador::class, 'misComidas']);