<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BranchesController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\CompanyMenuController;
use App\Http\Controllers\UserNavController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotificationsController;
// route to create new user
Route::get('/register', [UsersController::class, 'create'])->name('register');
Route::get('/homepage', [UsersController::class, 'index'])->name('homepage');
Route::post('/users', [UsersController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::view('/', 'users.splashpage');
Route::get('/home', [UserNavController::class, 'home'])->name('home');
Route::get('/support/prices', [UserNavController::class, 'prices'])->name('prices');
Route::get('/support/about', [UserNavController::class, 'abouts'])->name('abouts');
Route::get('/support/contactus', [UserNavController::class, 'contacts'])->name('contacts');

// user dynamic menu routes
// Route::get('/support', [UsersController::class, 'index'])->name('Homepage');
Route::get('/allbranches', [BranchesController::class, 'index'])->name('allbranches');
Route::get('/prices', [UsersController::class, 'prices'])->name('prices');
Route::get('/about', [UsersController::class, 'about'])->name('abouts');
Route::get('/contactus', [UsersController::class, 'contactus'])->name('contacts');
Route::get('/allcompanies', [UsersController::class, 'allcompanies'])->name('listcompanies');
Route::get('/users/home', [UsersController::class, 'index'])->name('companies');
// route for parcels online booking
Route::get('/parcels/create', [ParcelController::class, 'create'])->name('parcels');
Route::post('/parcels', [ParcelController::class, 'store']);
// company routes
// Route::get('/companies', [CompaniesController::class, 'index']);
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');
Route::get('/company/{id}', [CompaniesController::class, 'show'])->name('company');
Route::get('/company/ourinhouse', [CompaniesController::class, 'our_inhouse'])->name('our_inhouse');
Route::get('/company/ourcustomers', [CompaniesController::class, 'our_customers'])->name('our_customers');
Route::get('/companies/dropoffs', [CompaniesController::class, 'dropoff_requests'])->name('dropoffs');
Route::get('/companies/movable_units', [CompaniesController::class, 'movable_units'])->name('mu');
Route::get('/company/profile', [CompaniesController::class, 'company_profile'])->name('company_profile');
// menus routes
Route::get('/home', [CompanyMenuController::class, 'home'])->name('home');
Route::get('/companies/inhouse', [CompanyMenuController::class, 'inhouse'])->name('inhouse');
Route::get('/companies/customers', [CompanyMenuController::class, 'customers'])->name('customers');
Route::get('/companies/parcelrequests', [CompanyMenuController::class, 'requests'])->name('requests');
Route::get('/companies/movableunits', [CompanyMenuController::class, 'mus'])->name('mus');
Route::get('/companies/Company Profile', [CompanyMenuController::class, 'profile'])->name('profile');

Route::get('/create/abouts', [AboutController::class, 'create'])->name('createabout');
//user notifications controller
Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications');


// have a page where when I click on prices it selects all companies prices and displays them for a user..