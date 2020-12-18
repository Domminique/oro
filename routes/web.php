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



CWD /www
Response:	550 Can't change directory to /www: No such file or directory
Error:	Failed to retrieve directory listing
Status:	Renaming '/www' to '/public_ftp/www'
Status:	Retrieving directory listing of "/public_html/app"...
Command:	CWD /public_html
Response:	550 Can't change directory to /public_html: No such file or directory
Error:	Failed to retrieve directory listing
Status:	Retrieving directory listing of "/public_html/app"...
Command:	CWD /public_html
Response:	550 Can't change directory to /public_html: No such file or directory
Error:	Failed to retrieve directory listing
Status:	Retrieving directory listing of "/public_html"...
Command:	CWD /public_html
Response:	550 Can't change directory to /public_html: No such file or directory
Error:	Failed to retrieve directory listing
Status:	Retrieving directory listing of "/www"...
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
