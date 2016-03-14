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

// Get index view (GET)
Route::get('/', array(
        'as' => 'get-index',
        'uses' => 'AdminController@getIndex',
));

// Create admin (POST)
Route::post('create-admin', array(
        'as' => 'create-admin',
        'uses' => 'AdminController@postCreateAdmin',
));
