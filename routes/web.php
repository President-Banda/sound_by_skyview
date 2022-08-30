<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create.blade.php something great!
|
*/

Route::get('/', [ListingController::class,'index']);

// show create.blade.php form
Route::get('/listings/create', [ListingController::class,'create'])->name('listings.create');

// store new listingsController
Route::post('/listings', [ListingController::class,'store'])->name('listings.store');

//show edit form
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->name('listings.edit');

//Edit form to submit
Route::put('/listings/{listing}', [ListingController::class,'update'])->name('listings.update');

Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->name('listings.delete');

Route::get('/listing/{listing}', [ListingController::class,'show']);

//show register create form
Route::get('/register', [UserController::class, 'create'])->name('register');

// Create new user
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// show login
Route::get('/login', [UserController::class, 'login'])->name('login');

