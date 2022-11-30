<?php

use App\Http\Controllers\CalculateDestinationController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\RoutesController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/destination', [CalculateDestinationController::class, 'index'])->name('destination');
Route::post('/calculate', [CalculateDestinationController::class, 'calculate'])->name('calculate');

Route::get('/cities', [CitiesController::class, 'index'])->name('cities');
Route::get('/routes', [RoutesController::class, 'index'])->name('routes');
