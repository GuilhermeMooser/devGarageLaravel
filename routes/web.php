<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\HomeController;

// Rotas de autenticação (login, registro, etc.)
Auth::routes();

// Página inicial acessível a qualquer visitante
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rota adicional para a página inicial, caso seja necessário
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rotas protegidas por autenticação para veículos
Route::middleware(['auth'])->group(function () {
    Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicle.index'); // Lista de veículos
    Route::get('/vehicle/create', [VehicleController::class, 'create'])->name('vehicle.create'); // Formulário de criação
    Route::post('/vehicle', [VehicleController::class, 'store'])->name('vehicle.store'); // Salva um novo veículo
    Route::get('/vehicle/{vehicle}', [VehicleController::class, 'show'])->name('vehicle.show'); // Exibe um veículo
    Route::get('/vehicle/{vehicle}/edit', [VehicleController::class, 'edit'])->name('vehicle.edit'); // Formulário de edição
    Route::put('/vehicle/{vehicle}', [VehicleController::class, 'update'])->name('vehicle.update'); // Atualiza veículo
    Route::delete('/vehicle/{vehicle}', [VehicleController::class, 'destroy'])->name('vehicle.destroy'); // Deleta veículo
});
