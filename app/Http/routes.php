<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

	Route::get('/', 					         'BackController@getIndex');

	Route::get('/edit/all',           	         'BackController@getAll');
	Route::get('/edit/about',                    'BackController@getAbout');
	Route::get('/edit/gallery',                  'BackController@getGallery');
	Route::get('/edit/programs',                 'BackController@getPrograms');
	Route::get('/edit/type',                     'BackController@getType');
	Route::get('/edit/educators',                'BackController@getEducators');
	Route::get('/edit/contact',                  'BackController@getContact');
	Route::get('/edit/fidback',                  'BackController@getFidback');


	Route::get('/edit/upgrade_programs/{id}',    'BackController@editProgram');
	Route::get('/edit/upgrade_program/{id}',     'BackController@editType');


});


Route::get('/',                       'FrontController@getIndex');

Route::get('/{slug}',                 'FrontController@getAnything');