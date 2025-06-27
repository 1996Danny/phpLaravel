<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// use App\Http\Controllers\MiPrimerControlador;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return 'Hola mundo';
// });

// Route::get('/saludo', function (){
//     return 'Buenos días';
// });

// Route::get('/', [MiPrimerControlador::class, 'raiz']);
// Route::get('/saludo', [MiPrimerControlador::class, 'saludo']);
// Route::get('/misNoticias', [MiPrimerControlador::class, 'misNoticias']);
// Route::get('/miHistoria', [MiPrimerControlador::class, 'miHistoria']);
// Route::get('/clientes', [MiPrimerControlador::class, 'misClientes']);
// Route::get('/cliente/{idCliente}', [MiPrimerControlador::class, 'filtrarClintePorrId']);
// Route::get('/clientedni/{dni}', [MiPrimerControlador::class, 'filtrarClientePorDni']);
// Route::get('/clientes/apellido/{apellido}', [MiPrimerControlador::class, 'filtrarNombreCoincidencia']);
// Route::get('/clientes/dni/{dni}', [MiPrimerControlador::class, 'dniMayorIgual']);
// Route::get('/clientes/eliminar/{id}', [MiPrimerControlador::class, 'elimnarCliente']);
// Route::get('/pedidos', [MiPrimerControlador::class, 'misPedidos']);
// Route::get('/comidas', [MiPrimerControlador::class, 'misComidas']);

// RUTAS POR CADA CONTROLADOR

// CLIENTES
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'show']);
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy']);