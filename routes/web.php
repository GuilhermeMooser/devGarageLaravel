<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicle.index');
    Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create');

    Route::get('/vehicle/{vehicle}', [VehicleController::class, 'show'])->name('vehicle.show');
    Route::post('/vehicle', [VehicleController::class, 'store'])->name('vehicle.store');
    Route::get('/vehicle/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit');
    Route::put('/vehicle/{vehicle}', [VehicleController::class, 'update'])->name('vehicle.update');
    Route::delete('/vehicle/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicle.destroy');
});
