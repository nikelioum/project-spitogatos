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

Route::get('/' , 'PagesController@index');
Route::post('/search' , 'PagesController@search');

//Admin panel

Auth::routes();

//Home page
Route::get('/home', 'HomeController@index')->name('home');

//Types page
Route::get('/types' , 'TypesController@index');
Route::post('/new-type', 'TypesController@new');
Route::get('/delete-type/{id}' , 'TypesController@delete');

//Locations page
Route::get('/locations' , 'LocationsController@index');
Route::post('/new-location', 'LocationsController@new');
Route::get('/delete-location/{id}' , 'LocationsController@delete');

//Availabilities page
Route::get('/availabilities' , 'AvailabilitiesController@index');
Route::post('/new-availability', 'AvailabilitiesController@new');
Route::get('/delete-availability/{id}' , 'AvailabilitiesController@delete');

//Appartments page
Route::get('/appartments' , 'AppartmentsController@index');
Route::post('/new-appartment', 'AppartmentsController@new');
Route::get('/delete-appartment/{id}' , 'AppartmentsController@delete');
