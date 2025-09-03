<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UtilizadorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthController::class, 'login'])->name('login');
        Route::post('login', [AuthController::class, 'loginPost']);
    });

    Route::middleware('auth')->group(function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    });
});

Route::get('/', [HomeController::class, 'index']);

Route::prefix('panel')->group(function () {
    Route::get('/', [HomeController::class, 'panel']);

    Route::resource('utilizadores', UtilizadorController::class);
    Route::resource('carros', CarroController::class);
    Route::resource('clientes', ClienteController::class);
});

Route::get('/storage/{path}/{name}', function ($path, $name) {
    return Storage::download('public/' . $path . '/' . $name);
});
