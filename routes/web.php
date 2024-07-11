<?php

use App\Http\Controllers\JuegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JuegoController::class, 'index'])->name('juegos.index');

Route::group(['prefix' => '/api/medicamentos/'], function () {
    Route::post('/api/apuesta/store', [JuegoController::class, 'store'])->name('apuesta.store');
});
