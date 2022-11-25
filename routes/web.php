<?php

use App\Http\Controllers\BmiController;
use App\Http\Controllers\HealthTestsController;
use App\Http\Controllers\HypoxiaTestController;
use App\Http\Controllers\RuffierTestController;
use App\Http\Controllers\Workout\MainWorkoutController;
use App\Http\Controllers\Workout\PushupsController;
use App\Http\Controllers\Workout\RegularPushupsController;
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

Route::get('/tests', [HealthTestsController::class, 'index'])->name('health-tests.index');

Route::get('/tests/bmi', [BmiController::class, 'create'])->name('bmi.create');
Route::post('/tests/bmi', [BmiController::class, 'store'])->name('bmi.store');

Route::get('tests/ruffier', [RuffierTestController::class, 'create'])->name('ruffier.create');
Route::post('tests/ruffier', [RuffierTestController::class, 'store'])->name('ruffier.store');

Route::get('tests/hypoxia', [HypoxiaTestController::class, 'create'])->name('hypoxia.create');
Route::post('tests/hypoxia', [HypoxiaTestController::class, 'store'])->name('hypoxia.store');

Route::get('/workout', [MainWorkoutController::class, 'index'])->name('workout.index');

Route::get('/workout/push-ups', [PushupsController::class, 'index'])->name('push-ups.index');

Route::get('push-ups/regular', [RegularPushupsController::class, 'create'])->name('regular-push-ups.create');
Route::post('push-ups/regular', [RegularPushupsController::class, 'store'])->name('regular-push-ups.store');


Route::get('push-ups/wide', [WidePushupsController::class, 'index'])->name('wide-push-ups.index');
Route::get('push-ups/diamond', [DiamondPushupsController::class, 'index'])->name('diamond-push-ups.index');


Route::get('/nutrition', 'NutritionController@index')->name('nutrition.index');
Route::get('/general', 'GeneralController@index')->name('general.index');
