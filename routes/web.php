<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ParcelController;
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


// route to create new user
Route::get('/', [UsersController::class, 'create']);
Route::get('/users/create',[UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
// route for parcels online booking
Route::get('/users/parcel', [ParcelController::class, 'create']);
Route::post('/parcels', [ParcelController::class, 'store']);