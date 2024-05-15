<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/register', [RegisterController::class,"reg"]);

Route::post('/register',[RegisterController::class,"regis"]);
 

 Route::get('/welcome',[WelcomeController::class,"welcome"]);

  Route::get('/logout',[WelcomeController::class,"logout"]);

  Route::patch('/update/{id}',[WelcomeController::class,"update"]);

Route::get('/edit/{id}', [WelcomeController::class, 'edit']);


 Route::delete('/register/{id}', [WelcomeController::class, 'destroy']);