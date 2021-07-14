<?php

use App\Http\Controllers\BookController;
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


Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::get('/book/{book}', 'App\Http\Controllers\BookController@show');
Route::post('/book', 'App\Http\Controllers\BookController@store');
Route::delete('/book/{book}', 'App\Http\Controllers\BookController@destroy');
Route::get('/book/{book}/edit', 'App\Http\Controllers\BookController@edit');
Route::patch('/book/{book}', 'App\Http\Controllers\BookController@update');
