<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Tours\TourApiController;
use App\Http\Controllers\API\Auth\LoginApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [LoginApiController::class, 'login']);
Route::get('/logout', [LoginApiController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/all-tours', [TourApiController::class, 'index'])->middleware('auth:sanctum');
Route::post('/search-tours', [TourApiController::class, 'search'])->middleware('auth:sanctum');