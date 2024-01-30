<?php

use App\Http\Controllers\ADM_PagamentoController;
use App\Http\Controllers\ProfissionalController;
use App\Models\ADM_PagamentoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//profissional

Route::post('profissional/esqueciSenha',[ProfissionalController::class, 'esqueciSenha']);

//CRUD Forma de Pagamento
Route::post('ADM/tipo_pagamento',[ADM_PagamentoController::class, 'store']);
