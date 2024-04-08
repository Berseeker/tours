<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/' . App::getLocale())->name('inicio');

Route::middleware([LocaleMiddleware::class])->group(function () {
    Route::get('/{locale}', [HomeController::class, 'index'])->name('home');
});

Auth::routes();

