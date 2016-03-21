<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*____USER-PAGINA'S____*/
Route::group(['middleware' => 'auth'], function () 
{
	Route::get('dashboard', 'PageController@dashboard');

	Route::get('/', 'PageController@dashboard');

	Route::get('/user', 'PageController@user');

	Route::get('/wordpress', 'PageController@wordpress');

	Route::get('/joomla', 'PageController@joomla');

	Route::get('/drupal', 'PageController@drupal');

	Route::get('/statisch', 'PageController@statisch');
});


Route::get('login', 'PageController@login');
Route::post('login', 'UserController@login');

Route::get('register', 'PageController@register');
Route::post('register', 'UserController@nieuw');

Route::get('logout', 'UserController@logout');



