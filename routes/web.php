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
use App\Http\Controllers\ResetPasswordController;


Route::view('', 'users.splashpage');
Route::get('/register', [UsersController::class, 'create'])->name('register');
Route::get('/homepage', [CompaniesController::class, 'index'])->name('homepage');
Route::post('/users', [UsersController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/home', [UserNavController::class, 'home'])->name('home');
Route::get('/support/about', [UserNavController::class, 'abouts'])->name('abouts');
Route::get('/support/prices', [UserNavController::class, 'prices'])->name('prices');
Route::get('/support/contactus', [UserNavController::class, 'contacts'])->name('contacts');

Route::get('/about', [AboutController::class, 'about'])->name('abouts');
Route::get('/prices', [UsersController::class, 'prices'])->name('prices');
Route::get('/contactus', [UsersController::class, 'contactus'])->name('contacts');
Route::get('/users/home', [CompaniesController::class, 'index'])->name('companies');
Route::get('/users/company', [CompaniesController::class, 'branch'])->name('visit company');
Route::get('/allbranches', [BranchesController::class, 'index'])->name('allbranches');
Route::get('/allcompanies', [UsersController::class, 'allcompanies'])->name('listcompanies');
Route::get('/users/{id}/company', [CompaniesController::class, 'show'])->name('singlecompany');

Route::get('/myparcels', [ParcelController::class, 'myparcels'])->name('myparcels');
Route::get('/send', [ParcelController::class, 'create'])->name('parcels');
Route::post('/parcels', [ParcelController::class, 'store']);

Route::get('/companies', [CompaniesController::class, 'index'])->name('companies');
Route::get('/company/register', [CompaniesController::class, 'create'])->name('company');
Route::get('/companies/movable_units', [CompaniesController::class, 'movable_units'])->name('mu');
Route::get('/company/ourinhouse', [CompaniesController::class, 'our_inhouse'])->name('our_inhouse');
Route::get('/companies/dropoffs', [CompaniesController::class, 'dropoff_requests'])->name('dropoffs');
Route::get('/company/ourcustomers', [CompaniesController::class, 'our_customers'])->name('our_customers');
Route::get('/company/profile', [CompaniesController::class, 'company_profile'])->name('company_profile');

Route::get('/home', [CompanyMenuController::class, 'home'])->name('home');
Route::get('/companies/movableunits', [CompanyMenuController::class, 'mus'])->name('mus');
Route::get('/companies/inhouse', [CompanyMenuController::class, 'inhouse'])->name('inhouse');
Route::get('/companies/customers', [CompanyMenuController::class, 'customers'])->name('customers');
Route::get('/companies/parcelrequests', [CompanyMenuController::class, 'requests'])->name('requests');
Route::get('/companies/Company Profile', [CompanyMenuController::class, 'profile'])->name('profile');

Route::get('/create/abouts', [AboutController::class, 'create'])->name('createabout');
Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications');

Route::get('/reset-password', [ResetPasswordController::class, 'index'])->name('reset-password');
Route::post('/reset-password/{id}', [ResetPasswordController::class, 'update'])->name('update-password');

// have a page where when I click on prices it selects all companies prices and displays them for a user..
