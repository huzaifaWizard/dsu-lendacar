<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddCarController;

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

Route::get('/', [AddCarController::class, "index"]);
Route::get('/rent', [AddCarController::class, "addCar"]);
Route::get('/thanks', [AddCarController::class, "thanks"]);
Route::get('/listing-detail', [AddCarController::class, "details"]);
Route::post('/store', [AddCarController::class, "storeCar"]);
//Route::get('/listings', [AddCarController::class, "carView"])->name('carView');

Route::resource('cars', CompanyController::class);
