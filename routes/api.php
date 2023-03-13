<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Já tinha ese código por default! Pra que serve?
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});