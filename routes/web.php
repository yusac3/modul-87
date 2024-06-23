<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {return view('welcome');})->name('welcome');
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('employees', EmployeeController::class);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/', [LoginController::class, 'authenticate']);
