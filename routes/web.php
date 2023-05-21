<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ParcelController;

// route to create new user
Route::get('/', [UsersController::class, 'create']);
Route::get('/users/create',[UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
// route for parcels online booking
Route::get('/parcels/create', [ParcelController::class, 'create']);
Route::post('/parcels', [ParcelController::class, 'store']);
