<?php

use App\Http\Controllers\CartaoController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\OperadoraController;
use Illuminate\Support\Facades\Route;

//Route::resource('/funcionario', FuncionarioController::class)->except(['show', 'edit','update']);

Route::get('/', [FuncionarioController::class, 'index'])->name('index');
Route::controller(FuncionarioController::class)->group(function () {
    Route::get('/funcionarios/criar', 'create')->name('funcionario.create');
    Route::post('/funcionarios/salvar', 'store')->name('funcionario.store');
    Route::post('/funcionarios/delete/{id}', 'destroy')->name('funcionario.destroy');
});

Route::controller(OperadoraController::class)->group(function () {
    Route::get('/operadoras', 'index')->name('operadora.index');
    Route::get('/operadoras/criar', 'create')->name('operadora.create');
    Route::post('/operadoras/salvar', 'store')->name('operadora.store');
    Route::post('/operadoras/delete/{id}', 'destroy')->name('operadora.destroy');

});

Route::get('/cartao/criar', [CartaoController::class, 'create'])->name('cartao.create');
Route::post('/cartao/salvar', [CartaoController::class, 'store'])->name('cartao.store');
Route::get('/cartao/buscar', [CartaoController::class,'show'])->name('cartao.show');
Route::post('/cartao/recupera',[CartaoController::class, 'recupera'])->name('cartao.recupera');
