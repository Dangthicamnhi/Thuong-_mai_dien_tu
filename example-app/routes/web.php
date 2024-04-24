<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\login;
=======
<<<<<<< Updated upstream

=======
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
>>>>>>> Stashed changes
>>>>>>> login
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

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
Route::get('/login', [login::class, 'showLoginForm'])->name('login');
=======
<<<<<<< Updated upstream
Route::get('/login', function () {
    return view('login');
});
=======
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
>>>>>>> login
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


<<<<<<< HEAD
=======
>>>>>>> Stashed changes
>>>>>>> login

