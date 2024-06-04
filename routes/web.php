<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\CurrencyMiddleware;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

//Route::redirect('/', '/' . App::getLocale())->name('inicio');

Route::middleware([LocaleMiddleware::class, CurrencyMiddleware::class])->group(function () {
    Route::get('/{locale}', [HomeController::class, 'index'])->name('inicio');
    Route::post('/search-tours/{locale}', [HomeController::class, 'searchTours'])->name('search.tours');
    Route::get('/search-tours/{locale}', [HomeController::class, 'searchTours'])->name('search.tours.get');
    Route::get('/show-tours/{locale}', [HomeController::class, 'showTours'])->name('show.tours');
    Route::get('/{locale}/dashboard', [HomeController::class, 'index'])->name('home');
    Route::get('/{locale}/login', [LoginController::class, 'index'])->name('login');
    //Auth::routes();
    //Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::get('/dashboard', [AdminController::class, 'index'])->name('home');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'login'])->name('logout');
Route::get('register', [RegisterController::class, 'index'])->name('register');




