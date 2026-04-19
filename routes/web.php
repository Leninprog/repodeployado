<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\ProgresosController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::resource('estudiantes', EstudiantesController::class);
    Route::resource('notas', NotasController::class);
    Route::resource('progresos', ProgresosController::class);

    Route::group(['prefix' => 'calculadoras'], function () {
        Route::get('/', 'CalculadoraController@index')->name('calculadoras.index');
        Route::post('/', 'CalculadoraController@index')->name('calculadoras.index'); 
    });
});

// Route::resource('estudiantes', EstudiantesController::class);
// Route::resource('notas', NotasController::class);
// Route::resource('progresos', ProgresosController::class);


