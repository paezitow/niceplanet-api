<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutorController;
use App\Http\Controllers\PropriedadeController;

Route::post('/registerUser', [AuthController::class, 'register']); //rota de cadastro de novos usuários na plataforma
Route::post('/login', [AuthController::class, 'login']); // rota de login na plataforma

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/produtor', [ProdutorController::class, 'create']); // rota de cadastro de produtor
    Route::get('/produtores', [ProdutorController::class, 'showAll']); // rota de busca de todos os produtores no banco de dados
    Route::get('/produtor/{id}', [ProdutorController::class, 'show']); // rota de busca de um produtor específico

    Route::post('/propriedade', [PropriedadeController::class, 'create']); // rota de cadastro de propriedade
    Route::get('/propriedades', [PropriedadeController::class, 'showAll']); // rota de busca de todas as propriedades no banco de dados
    Route::get('/propriedade/{id}', [PropriedadeController::class, 'show']); // rota de busca de uma propriedade específica
});

