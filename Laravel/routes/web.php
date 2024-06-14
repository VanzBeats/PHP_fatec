<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mensagem/{mensagem}", [MensagemController::class, 'mostrarMensagem']);

Route::resources(
[
    'clientes' => ClienteController::class,
]
);

Route::get('/clientes/delete/{id}' , [ClienteController::class, 'delete']);


