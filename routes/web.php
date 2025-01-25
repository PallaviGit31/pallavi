<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CountryController;
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
Route::match(['get', 'post'], 'dashboard', [DashboardController::class, 'index'])->name('dashboard');   

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::match(['get', 'post'], 'login', [LoginController::class, 'login'])->name('login');

Route::match(['get', 'post'], 'register', [RegisterController::class, 'register'])->name('register');

Route::match(['get', 'post'], 'create', [RegisterController::class, 'create'])->name('create');

Route::match(['get', 'post'], 'country/{country}/states', [CountryController::class, 'getStates']);
Route::match(['get', 'post'], 'country/{country}/cities', [CountryController::class, 'getCities']);

Route::get('/', function () {
    return view('welcome');
});
