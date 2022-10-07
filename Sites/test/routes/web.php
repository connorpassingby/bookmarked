<?php

use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//create a review form
Route::get('/reviews/create', [ReviewController::class, 'create'])->middleware('auth');

//create new record
Route::post('/reviews', [ReviewController::class, 'store'])->middleware('auth');

//show edit form
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->middleware('auth');

// Update 
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->middleware('auth');

// Delete 
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->middleware('auth');

//create new record
Route::get('/reviews/manage', [ReviewController::class, 'manage'])->middleware('auth');

//fetch single element  
Route::get('/reviews/{review}', [ReviewController::class, 'show']);

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




