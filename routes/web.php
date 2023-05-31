<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CompanyMenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationsController;
// route to create new user
Route::get('/', [UsersController::class, 'create'])->name('create');
// Route::get('/users/create',[UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
// route for parcels online booking
Route::get('/parcels/create', [ParcelController::class, 'create'])->name('parcels');
Route::post('/parcels', [ParcelController::class, 'store']);
// company routes
// Route::get('/companies', [CompaniesController::class, 'index']);
Route::get('/companies', [CompaniesController::class, 'index'])->name('comapanies');
// menus routes
Route::get('/home',[CompanyMenuController::class, 'home'])->name('home');
Route::get('/companies/inhouse', [CompanyMenuController::class, 'inhouse'])->name('inhouse');
Route::get('/companies/customers', [CompanyMenuController::class, 'customers'])->name('customers');
Route::get('/companies/parcelrequests', [CompanyMenuController::class, 'requests'])->name('requests');
Route::get('/companies/movableunits', [CompanyMenuController::class, 'mus'])->name('mus');
Route::get('/companies/Company Profile', [CompanyMenuController::class, 'profile'])->name('profile');
//user notifications controller
Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications');