<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\OwnersController;
use App\Http\Controllers\VerifiedController;

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id


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


//=============================================================================================\\

                                // M A R K E T  R O U T E \\

// PAGE MARKET PUBLIC
Route::get('/', [MarketController::class, 'index'])->name('market');

// PAGE CARS DETAIL MARKET PUBLIC
Route::get('/market/{kode_mobil}',[MarketController::class, 'details'])->name('cardetails');

// PAGE WISHLIST AUTH USER
Route::get('/wishlist', [MarketController::class, 'wishlist'])->name('wishlist');

// FUNCTION ADD WISHLIST AUTH USER
Route::post('/wishlist', [MarketController::class, 'addWishlist'])->name('addWishlist')->middleware('auth');

// FUNCTION DELETE WISHLIST AUTH USER
Route::delete('/wishlist/{id}', [MarketController::class, 'delWishlist'])->name('delWishlist')->middleware('auth');

//=============================================================================================\\

                              // O W N E R S  R O U T E \\

// PAGE LOGIN OWNER
Route::get('/owner/login', [OwnersController::class, 'ownlogin'])->name('ownlogin');
Route::post('/owner/login', [OwnersController::class, 'ownauthenticate'])->name('ownauthenticate');

// PAGE REGISTER OWNER
Route::get('/owner/register', [OwnersController::class, 'ownregister'])->name('ownregister');
Route::post('/owner/register', [OwnersController::class, 'ownstore'])->name('ownstore');

// PAGE LOGOUT OWNER
Route::get('/owner/logout', [OwnersController::class, 'ownlogout'])->name('own.logout');


// MIDDLEWARE OWNER PAGE
Route::middleware('auth:owner')->group(function(){

// PAGE PROFILE OWNER
Route::get('/owner/profile', [OwnersController::class, 'ownprofile'])->name('own.profile');

// FUNCTION EDIT PROFILE OWNER
Route::patch('/owner/profile/{id}', [OwnersController::class, 'update'])->name('own.update');

// FUNCTION EDIT FOTO OWNER
Route::put('/owner/profile/{id}', [OwnersController::class, 'foto'])->name('own.foto');


// PAGE GARAGE OWNER
Route::get('/garage', [CarsController::class, 'index'])->name('garage');

// FUNCTION ADD CARS FOR OWNER
Route::post('/garage', [CarsController::class, 'store'])->name('garage.store');

// FUNCTION EDIT CARS FOR OWNER
Route::patch('/garage/{id}', [CarsController::class, 'update'])->name('garage.update');

// FUNCTION DELETE CARS FOR OWNER
Route::delete('/garage/{id}', [CarsController::class, 'destroy'])->name('garage.destroy');

});

//=============================================================================================\\

                                // U S E R S  R O U T E \\

// PAGE LOGIN USER
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// PAGE REGISTER USER
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// PAGE LOGOUT USER
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// PAGE PROFILE USER
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

// FUNCTION EDIT PROFILE USER
Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

// FUNCTION EDIT FOTO USER
Route::put('/profile/{id}', [ProfileController::class, 'foto'])->name('profile.foto')->middleware('auth');

// PAGE VERIFICATION DATA USER
Route::get('/verified/{uuid}', [VerifiedController::class, 'index'])->name('verified')->middleware('auth');

// FUNCTION VERIFICATION DATA USER
Route::put('/verified/{id}', [VerifiedController::class, 'verify'])->name('verified.verify')->middleware('auth');

//=============================================================================================\\
