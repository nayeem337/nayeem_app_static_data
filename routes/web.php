<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


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


Route::get('/',[WelcomeController::class, 'index'])->name('home');
Route::get('/about',[WelcomeController::class, 'about'])->name('about')->middleware('dashboard');
Route::get('/contact',[WelcomeController::class, 'contact'])->name('contact');
Route::get('/detail/{id}',[WelcomeController::class, 'detail'])->name('detail');
Route::get('/category/{id}',[WelcomeController::class, 'category'])->name('category');
Route::post('/make-full-name',[WelcomeController::class, 'makeFullName'])->name('make-full-name');
Route::get('/password-generator',[WelcomeController::class, 'passwordGenerator'])->name('password-generator')->middleware('dashboard');
Route::post('/make-password',[WelcomeController::class, 'makePassword'])->name('make-password');

Route::get('/login',[AuthController::class, 'index'])->name('login')->middleware('login');
Route::post('/login',[AuthController::class, 'login'])->name('login');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('dashboard');
Route::get('/logout',[AuthController::class, 'logout'])->name('logout');






