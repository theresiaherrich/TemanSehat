<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Models\Booking;
use App\Http\Controllers\StaffController;
use App\Models\Staff;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


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



Route::resource('/booking', \App\Http\Controllers\BookingController::class);
Route::resource('/datastaff', \App\Http\Controllers\StaffController::class);
Route::resource('/pasien', \App\Http\Controllers\SiswaController::class);

Route::get('/appointment', [BookingController::class, 'indexo'])->name('indexo');
Route::get('/about', [AboutController::class, 'indexo'])->name('indexo');
Route::get('/contact', [ContactController::class, 'indexo'])->name('indexo');
Route::get('/staff', [StaffController::class, 'indexo'])->name('indexo');

Route::get('/admin', [StaffController::class, 'jumlah'])->name('jumlah');
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});


Auth::routes();
Route::middleware(['auth', 'user-access:user'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
