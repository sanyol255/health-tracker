<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthTestsController;
use App\Http\Controllers\BmiController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'main-page')->name('main-page');

Route::get('/tests', [HealthTestsController::class, 'index'])->name('health-tests.index');


Route::get('/tests/bmi', [BmiController::class, 'create'])->name('bmi.create');
Route::post('/tests/bmi', [BmiController::class, 'store'])->name('bmi.store');

Route::get('/workout', 'WorkoutController@index')->name('workout.index');
Route::get('/nutrition', 'NutritionController@index')->name('nutrition.index');
Route::get('/general', 'GeneralController@index')->name('general.index');
