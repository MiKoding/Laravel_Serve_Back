<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/contatos',[App\Http\Controllers\ContatoController::class,'index']);
Route::post('/save',[App\Http\Controllers\ContatoController::class,'store']);
Route::put('/update/{id}',[App\Http\Controllers\ContatoController::class,'update']);
Route::delete('/delete/{id}',[App\Http\Controllers\ContatoController::class,'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
