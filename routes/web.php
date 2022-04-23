<?php

use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('admin/dashboard');
// });

Route::get('/', [RegisterController::class, "loginForm"])->name('login');
Route::post('/', [LoginController::class, "Authenticate"])->name('login-user');


Route::get('/register', [RegisterController::class, "register"])->name('register');
Route::post('/register', [RegisterController::class, "registerUser"])->name('register-user');


Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/create', [dashboardController::class, 'create'])->name('create');
Route::post('/store', [dashboardController::class, 'store'])->name('store');
Route::get('/delete/{id}', [dashboardController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [dashboardController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [dashboardController::class, 'update'])->name('update');