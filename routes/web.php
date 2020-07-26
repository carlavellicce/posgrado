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

Route::get('/admin', 'PageController@posts');
Route::get('blog/{post}', 'PageController@post')->name('post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'Backend\PostController')
	->middleware('auth')
	->except('show')
	;

Route::get('/interested', 'InterestedController@index');	
Route::post('/interested', 'InterestedController@store')->name('interesteds.store');
Route::get('/interested/create', 'InterestedController@create');