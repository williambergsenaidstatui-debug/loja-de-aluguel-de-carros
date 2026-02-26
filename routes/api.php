<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/teste',[TestController::class,'envia_teste']);


Route::get('/soma',[TestController::class,'soma']);


Route::post('/salva_carro',[TestController::class,'salva_carro']);


Route::put('/alterar_carro',[Testcontroller::class,'alterar_carro']);

Route::get('/vem_carros',[TestController::class,'vem_carros']);

Route::get('/todos_carros',[TestController::class,'todos_carros']);

Route::delete('/deletar_carro',[Testcontroller::class,'deletar_carro']);