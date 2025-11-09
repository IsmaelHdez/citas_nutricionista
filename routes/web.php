<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentTypeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ProfileController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::delete('/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/create', [LoginController::class, 'indexRegister'])->name('login.create');
Route::post('/store', [LoginController::class, 'register'])->name('login.store');


Route::get('/user_profile', [ProfileController::class, 'index'])->middleware('auth')->name('user_profile');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/reserve', [AppointmentController::class, 'index'])->name('reserve.index');
Route::post('/reserve', [AppointmentController::class, 'store'])->name('reserve.store');

Route::get('/service', function () {
    return view('service');
})->name('service');