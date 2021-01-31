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

Route::get('/', function () {
    return view('index');
});

Route::get('/single_photo/1', function () {
    return view('photo-detail');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard/{id}', 'PhotoController@index');

Route::post('/create_content/{id}', 'PhotoController@store');

Auth::routes();

Route::get('/home/{id}', 'HomeController@index')->name('home');
