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

Route::get('/', 'App\Http\Controllers\AppController@welcome');
Route::get('/post', 'App\Http\Controllers\AppController@post')->name('post');
Route::get('/dep', 'App\Http\Controllers\AppController@dep')->name('dep');
Route::get('/chefdep/{id}', 'App\Http\Controllers\AppController@chefdep')->name('chefdep');
Route::get('/show', 'App\Http\Controllers\AppController@show')->name('show');
Route::get('/details/{id}', 'App\Http\Controllers\AppController@details')->name('details');
Route::get('/edit/{id}', 'App\Http\Controllers\AppController@edit')->name('edit');
//Route::get('/delete/{id}', 'App\Http\Controllers\AppController@delete')->name('delete');



Route::get('/dash', 'App\Http\Controllers\AppController@dashboard')->name('dashboard');
Route::post('/post', 'App\Http\Controllers\AppController@addpost');
Route::post('/edit/{id}', 'App\Http\Controllers\AppController@editpost');
Route::get('/delete/{id}', 'App\Http\Controllers\AppController@deletepost')->name('delete');

