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

Route::get('/', 'PageController@homefun' )->name('home');

Route::get('/about','PageController@aboutfun')->name('aboutname');

Route::get('/contact','PageController@contactfun')->name('contact');

Route::get('/samplepage','PageController@samplepagefun')->name('samplepage');