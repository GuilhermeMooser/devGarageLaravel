<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleTypesController;

// returns the home page with all posts
Route::get('/', VehicleController::class .'@index')->name('vehicle.index');
// returns the form for adding a post
Route::get('/vehicle/create', VehicleController::class . '@create')->name('vehicle.create');
// adds a post to the database
Route::post('/vehicle', VehicleController::class .'@store')->name('vehicle.store');
// returns a page that shows a full post
Route::get('/vehicle/{vehicle}', VehicleController::class .'@show')->name('vehicle.show');
// returns the form for editing a post
Route::get('/vehicle/{vehicle}/edit', VehicleController::class .'@edit')->name('vehicle.edit');
// updates a post
Route::put('/vehicle/{vehicle}', VehicleController::class .'@update')->name('vehicle.update');
// deletes a post
Route::delete('/vehicle/{vehicle}', VehicleController::class .'@destroy')->name('vehicle.destroy');

