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


/**
 * Routes for showing auth pages.
 */
 Auth::routes();

 /**
  * Route for showing the dashboard.
  */
  Route::get('/', function () {
      return view('dashboard');
  });
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

/**
* Routes for showing Users.
*/
Route::get('/gebruikers', 'HomeController@users')->name('gebruikers');

/**
 * Routes for showing groups.
 */
Route::get('/groepen', 'GroupController@index')->name('groepen');
Route::get('/groep/{id}', 'GroupController@show')->name('show-groep');
Route::post('/groep/{id}', 'GroupController@update')->name('update-groep');
Route::delete('/groep/{id}', 'GroupController@destroy')->name('delete-groep');
Route::post('/groep', 'GroupController@create')->name('create-groep');
