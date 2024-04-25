<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\VerifiedController;
use App\Http\Controllers\TesterController;

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

                                    // P U B L I C \\

// Tester Page
Route::get('/tester', [TesterController::class, 'index'])->name('index');


//Welcome Page
Route::get('/', function () {
    return view('welcome');
});

// Login Page
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');

// Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


//=============================================================================================\\

                                    // M A R K E T \\


// Market
Route::get('/market', [MarketController::class, 'index'])->name('market');

//Market Detail Cars
Route::get('/market/{kode_mobil}',[MarketController::class, 'details'])->name('market.details');

//=============================================================================================\\

                                    // P R O F I L E \\

// Profile Studio
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

// Update Profile
Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

// Update Foto Profile
Route::put('/profile/{id}', [ProfileController::class, 'foto'])->name('profile.foto')->middleware('auth');


//=============================================================================================\\

                                 // V E R I F I E D \\

// Verified Page
Route::get('/verified/{uuid}', [VerifiedController::class, 'index'])->name('verified')->middleware('auth');

// Verified Action
Route::put('/verified/{id}', [VerifiedController::class, 'verify'])->name('verified.verify')->middleware('auth');

//=============================================================================================\\

                                    // G A R A G E \\

// Garage Studio
Route::get('/garage', [GarageController::class, 'index'])->name('garage')->middleware('auth');

// Add Car Garage
Route::post('/garage', [GarageController::class, 'store'])->name('garage.store')->middleware('auth');

// Update Car Garage
Route::patch('/garage/{id}', [GarageController::class, 'update'])->name('garage.update')->middleware('auth');

// Delete Car Garage
Route::delete('/garage/{id}', [GarageController::class, 'destroy'])->name('garage.destroy')->middleware('auth');

//=============================================================================================\\
