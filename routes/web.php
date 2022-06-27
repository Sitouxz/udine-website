<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\Debugbar\Facades\Debugbar;
use App\Http\Controllers\ResponseController;

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

Route::get('/', [ResponseController::class, 'index']);
Route::get('environment', [ResponseController::class, 'environment']);
Route::get('service', [ResponseController::class, 'service']);
Route::get('food', [ResponseController::class, 'food']);
Route::get('overall', [ResponseController::class, 'overall']);