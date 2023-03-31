<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DentistController;
use App\Http\Controllers\AppointmentAppController;
use App\Http\Controllers\admin\ApplicationController;
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

Auth::routes();

Route::view('/','home.homepage');
// Route::view('login','login.login');
Route::view('aboutUs','home.aboutUs');
Route::view('appointment','home.appointment_app');
Route::view('services','home.services');
Route::view('admin/dashboard','admin.dashboard');
Route::view('user/dashboard','user.dashboard');
Route::view('dentist/dashboard','dentist.index');
Route::view('admin/appointments','admin.application');
Route::view('admin/services','admin.services');
Route::view('admin/products','admin.products');
Route::view('admin/dentist','admin.dentist');


Route::resource('admin/services', ServicesController::class);
Route::resource('admin/dentist', DentistController::class);
Route::resource('appointment', AppointmentAppController::class);
Route::resource('admin/appointments', ApplicationController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
