<?php

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index',
    ]);

Route::get('/home', [
    'as' => 'home',
    'uses' => 'HomeController@index',
    ]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


/**
* languages chooser
*/

Route::get('/lang', [
    'as' => 'LanguageChooser',
    'uses' => 'LanguageController@chooser',
    ]);


/**
* profile
*/

Route::get('/profile', [
    'as' => 'profile',
    'uses' => 'ProfileController@show',
    ]);



/**
* column
*/

Route::post('/column/enum', [
    'as' => 'column.enum',
    'uses' => 'ProfileController@storeEnum',
    ]);



