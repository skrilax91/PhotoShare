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

Route::resource('user', 'UserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/upload', 'HomeController@upload')->name('upload');
Route::post('/upload', 'HomeController@Postupload');
Route::get('/view', 'HomeController@viewImage');
Route::get('/myuploads', 'HomeController@myUploads');


Route::resource('images', 'ImageController', ['except' => ['show', 'edit', 'update']]);