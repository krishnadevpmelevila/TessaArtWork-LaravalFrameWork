<?php

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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about','NewController@about');
Route::get('/services','NewController@services');
Route::get('/works','NewController@image');
Route::get('/contact','NewController@contact');
Route::get('edit', 'ImageGalleryController@index');
Route::post('edit', 'ImageGalleryController@upload');
Route::delete('edit/{id}', 'ImageGalleryController@destroy');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
