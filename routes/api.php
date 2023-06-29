<?php

use App\Http\Controllers\Api\PontosCriticos\ResumoMobilizacaoApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('resumo-mobilizacao', ResumoMobilizacaoApiController::class);

//User
Route::get('users', [\App\Http\Controllers\UserController::class, 'index']);
