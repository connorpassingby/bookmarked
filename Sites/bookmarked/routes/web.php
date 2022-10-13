<?php

use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;

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

//fetch all elements
Route::get('/', [ReviewController::class, 'index']);

//create and post listings
Route::get('/reviews/create', [ReviewController::class, 'create'])->middleware('auth');
Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth');

//manage listings
Route::get('/reviews/manage', [ReviewController::class, 'manage'])->middleware('auth');

//edit and update listings
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->middleware('auth');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->middleware('auth');

//delete listings
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->middleware('auth');

//show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class, 'store']);

//logout existing user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//Single listings
//look up route-model binding
Route::get('/reviews/{review}', [ReviewController::class, 'show']);


