<?php

use Illuminate\Support\Facades\Route;

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
Route::view('admin/dashboard','admin.index');
Route::view('user/dashboard','user.dashboard');
Route::view('dentist/dashboard','dentist.index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
