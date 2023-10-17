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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.home');
});

Route::resource('/booking', \App\Http\Controllers\BookingController::class);
Route::resource('/datastaff', \App\Http\Controllers\StaffController::class);
Route::resource('/pasien', \App\Http\Controllers\SiswaController::class);

