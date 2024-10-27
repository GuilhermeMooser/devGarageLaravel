<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VehicleController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Returns the home page with all vehicles
// Route::get('/', VehicleController::class . '@index')->name('vehicle.index');
// Returns the form for adding a vehicle
// Route::get('/vehicle/create', VehicleController::class . '@create')->name('vehicle.create');
// adds a vehicle to the database
// Route::post('/vehicle', VehicleController::class . '@store')->name('vehicle.store');
// Returns a page that shows a full vehicle
// Route::get('/vehicle/{vehicle}', VehicleController::class . '@show')->name('vehicle.show');
// Returns the form for editing a vehicle
// Route::get('/vehicle/{vehicle}/edit', VehicleController::class . '@edit')->name('vehicle.edit');
// Updates a vehicle
// Route::put('/vehicle/{vehicle}', VehicleController::class . '@update')->name('vehicle.update');
// Deletes a vehicle
// Route::delete('/vehicle/{vehicle}', VehicleController::class . '@destroy')->name('vehicle.destroy');
