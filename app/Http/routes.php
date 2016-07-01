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

Route::group(['middleware' => 'web'], function(){
	Route::get('/', ['uses' => 'StudentController@index', 'as' => 'students.index']);

	Route::get('add', ['uses' => 'StudentController@add', 'as' => 'students.add']);
	Route::post('add', ['uses' => 'StudentController@addSave', 'as' => 'students.save']);

	Route::get('edit/{id}', ['uses' => 'StudentController@edit', 'as' => 'students.edit'])
		->where('id', '[0-9]+');
	Route::post('edit/{id}', ['uses' => 'StudentController@editSave', 'as' => 'students.edit.save'])
		->where('id', '[0-9]+');

	Route::get('delete/{id}', ['uses' => 'StudentController@delete', 'as' => 'students.delete'])
		->where('id', '[0-9]+');

});
