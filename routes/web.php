<?php

use App\Http\Controllers\AuthenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WeatherController;
use Illuminate\Support\Facades\Route;

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

Route::get('/employee/{id}', [HomeController::class, 'showEmployees']);

Route::controller(AuthenController::class)->group(function () {
    Route::get('/registration', 'registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user', 'registerUser')->name('register-user');
    Route::get('/login', 'login')->middleware('alreadyLoggedIn');
    Route::post('/login-user', 'loginUser')->name('login-user');
    Route::get('/dashboard', 'dashboard')->middleware('isLoggedIn');
    Route::get('/logout', 'logout');
});

Route::get('/weather', [WeatherController::class, 'getWeather']);

