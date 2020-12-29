<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Page 1
Route::get('/page1', [CoursController::class, 'index']);
Route::post('/update-page1/{id}', [CoursController::class, 'update']);
Route::get('/page2', [CoursController::class, 'page2']);
Route::post('/update-page2/{id}', [CoursController::class, 'storePage2']);
Route::get('/page3', [CoursController::class, 'page3']);
Route::post('/update-page3/{id}', [CoursController::class, 'storePage3']);
Route::get('/page4', [CoursController::class, 'page4']);
Route::post('/update-page4/{id}', [CoursController::class, 'storePage4']);

