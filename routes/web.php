<?php

use App\Http\Controllers\FuncionariosController;
use Illuminate\Support\Facades\Route;

//Route::resource('/funcionarios', FuncionariosController::class)->except(['show']);
Route::get('/', [FuncionariosController::class, 'index'])->name('index');
Route::get('/funcionarios/criar', [FuncionariosController::class, 'create'])->name('create');
Route::post('/funcionarios/salvar', [FuncionariosController::class, 'store'])->name('store');
