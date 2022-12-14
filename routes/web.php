<?php

use App\Http\Controllers\MasterController;
use App\Http\Controllers\WorkController;
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

Route::get('/', [MasterController::class, 'showHome']);
Route::get('/over-mij', [MasterController::class, 'showOverMij']);
Route::get('/mijn-werk', [WorkController::class, 'showWork']);
Route::get('/contact', [MasterController::class, 'showContact']);
Route::get('/super-orange', [MasterController::class, 'showSuperOrange']);
