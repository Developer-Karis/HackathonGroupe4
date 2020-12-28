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
