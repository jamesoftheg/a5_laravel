<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Using a controller
Route::get('/', [PagesController::class,"index"]);
Route::get('about', [PagesController::class,"about"]);
Route::get('services', [PagesController::class,"services"]);

// Resource controllers
Route::resource('rooms', RoomsController::class);
Route::resource('bookings', BookingsController::class);

// We can view our routes using php artisan route:list in the terminal
