<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

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

Route::prefix('cars')->name('cars.')->controller(CarsController::class)->group(function(){

    Route::get('/','index')->name('index');

    Route::get('/{slug}-{car}','show')->where([
        'car'=>'[0-9]+',
        'slug'=>'[A-Z-a-z0-9\-]+'
    ])->name('show');



});
