<?php

use App\Http\Controllers\VegetableController;
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



Route::resource('vegetables', VegetableController::class);



Route::get("/detail/{vegetable_id}", [VegetableController::class, "detail"])->name("detail");
