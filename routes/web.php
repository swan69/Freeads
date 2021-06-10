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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\IndexController::class, 'showIndex'])->name('index');
Route::get('/index', [App\Http\Controllers\IndexController::class, 'showIndex'])->name('index');
Route::get('/index.php', [App\Http\Controllers\IndexController::class, 'showIndex'])->name('index');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'showProfile'])->name('profile');

Route::get('/new_ad', [App\Http\Controllers\AdController::class, 'create'])->name('new_ad');
// Route::get('/new_ad', 'AdController@create')->name('new_ad');
Route::post('/new_ad/save', [App\Http\Controllers\AdController::class, 'save']);
// Route::post('/new_ad/save', 'AdController@save');