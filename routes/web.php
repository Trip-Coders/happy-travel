<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


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
Route::get('/', [TravelController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'busqueda'])->name('search.busqueda');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Auth::routes();

Route::get('/destinations/{travel}', [TravelController::class, 'show'])->name('destinations.show');
Route::get('/destinations', [TravelController::class, 'create'])->name('destinations.create');
Route::post('/destinations', [TravelController::class, 'store']);
Route::get('/destinations/{travel}/edit', [TravelController::class, 'edit'])->name('destinations.edit');
Route::patch('/destinations/{travel}', [TravelController::class, 'update'])->name('destinations.update');
Route::delete('/destinations/{travel}', [TravelController::class, 'destroy'])->name('destinations.destroy');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


