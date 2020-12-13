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
|Route::get('register', 'App\Http\Controllers\Api\RegisterController@register');
*/

// Route::get('/users', [UserController::class, 'index']);
// or


Route::get('/', 'App\Http\Controllers\PagesController@index');

Route::get('/write', 'App\Http\Controllers\PagesController@write');

Route::get('/learn', 'App\Http\Controllers\PagesController@learn');

Route::get('/advertise', 'App\Http\Controllers\PagesController@advertise');




Auth::routes();

Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::post('/p', 'App\Http\Controllers\PostsController@store');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
