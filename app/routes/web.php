<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
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

Route::get('/',[RouteController::class,"welcome"]);
Route::get('/login',[RouteController::class,"login"]);
Route::get("/search",[RouteController::class,"search"]);
