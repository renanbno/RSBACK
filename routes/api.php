<?php

use App\Http\Controllers\ProfissionalController;
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
Route::post('profissional/cadastro',[ProfissionalController::class,'store']);
Route::get('profissional/retornarTodos',[ProfissionalController::class,'retornarTodos']);
Route::post('procurarProfissional',[ProfissionalController::class, 'pesquisarPorNome']);
Route::post('procurarProfissional',[ProfissionalController::class, 'pesquisarPorCpf']);
Route::post('procurarProfissional',[ProfissionalController::class, 'pesquisarPorCelular']);
Route::post('procurarProfissional',[ProfissionalController::class, 'pesquisarPorEmail']);
Route::post('profissional/esqueciSenha',[ProfissionalController::class, 'esqueciSenha']);
Route::delete('excluir/{id}Profissional',[ProfissionalController::class, 'excluir']);
Route::put('atualizarProfissional', [ProfissionalController::class, 'update']);