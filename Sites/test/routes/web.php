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
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::post('/reviews', [ReviewController::class, 'store']);


//show register form
Route::get('/register', [UserController::class, 'create']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//logout existing user
Route::post('/logout', [UserController::class, 'logout']);

// show login form
Route::get('/login', [UserController::class, 'login']);

//login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


//Single listings
//look up route-model binding
Route::get('/reviews/{review}', [ReviewController::class, 'show']);


