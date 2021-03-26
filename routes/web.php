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

// Testing rooms controller
Route::get('/rooms', [RoomsController::class,"index"]);

// Route::resource('/rooms', RoomsController::class);
// Route::resource('rooms', 'RoomsController');
// We can view our routes using php artisan route:list in the terminal

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*

// If we go to our app name /about we'd get this result
// We don't want to return a view from our route.
// We create a controller. Controllers are created using the integrated terminal and artisan.
// We open the terminal and enter php artisan make:controller PagesController for instance.
Route::get('/about', function () {
    return view('pages.about');
});

// A dynamic route, we want to handle a get request to users with a specific ID in the URL
// If we go to users/13/James the page will return 'This is user James with an id of 13.'
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user' . $name.' with an id of '.$id;
});


// If we go to our app name /hello we'd get this result
Route::get('/hello', function () {
    return '<h1>Hello world!</h1>';
});

// Submitting a form to a route
Route::post('/submit', function () {
    return 'Submitted!';
});

// Deleting using a route
Route::post('/delete', function () {
    return 'Deleted!';
});
*/