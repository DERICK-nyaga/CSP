<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// route to create new user
Route::get('/', [UsersController::class, 'create']);
Route::post('/users/create',[UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
// Route::post('/', [UsersController::class, 'create'] );