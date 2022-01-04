<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturersController;
use App\Http\Controllers\CarModelsController;
use App\Http\Controllers\CarsController;

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
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){

    Route::get('/dashboard',[ManufacturersController::class, 'index'])->name('dashboard');

    Route::get('/manufacturer',[ManufacturersController::class, 'add']);
    Route::post('/manufacturer',[ManufacturersController::class, 'create']);

    Route::get('/manufacturer/{manufacturer}', [ManufacturersController::class, 'edit']);
    Route::post('/manufacturer/{manufacturer}', [ManufacturersController::class, 'update']);


    Route::get('/car_models_list',[CarModelsController::class, 'index'])->name('car_models_list');

    Route::get('/car_model',[CarModelsController::class, 'add']);
    Route::post('/car_model',[CarModelsController::class, 'create']);

    Route::get('/car_model/{car_model}', [CarModelsController::class, 'edit']);
    Route::post('/car_model/{car_model}', [CarModelsController::class, 'update']);


    Route::get('/cars_list',[CarsController::class, 'index'])->name('cars_list');

    Route::get('/car',[CarsController::class, 'add']);
    Route::get('/search',[CarsController::class, 'search']);
    Route::post('/car',[CarsController::class, 'create']);

    Route::get('/car/{car}', [CarsController::class, 'edit']);
    Route::post('/car/{car}', [CarsController::class, 'update']);

});
