<?php

use Illuminate\Support\Facades\Route;

//Contoller utilizadas nas rotas
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

/**
 * Rotas de login
 */
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


/**
 * Rotas de registro de usuário
 */
Route::get('/create', [RegisterController::class, 'create'])->name('register.create');
