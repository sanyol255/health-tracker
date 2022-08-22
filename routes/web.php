<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/', 'main-page')->name('main-page');
Route::get('/tests', 'HealthTestsController@index')->name('health-tests.index');
Route::get('/workout', 'WorkoutController@index')->name('workout.index');
Route::get('/nutrition', 'NutritionController@index')->name('nutrition.index');
Route::get('/general', 'GeneralController@index')->name('general.index');
