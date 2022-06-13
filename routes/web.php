<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UnitTypeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitDefaultController;
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


Route::get("locations", [LocationController::class,"index"]);

Route::get("unittypes", [UnitTypeController::class,"index"]);

Route::get("units", [UnitController::class,"index"]);

Route::get("/", [UnitDefaultController::class,"index"]);


