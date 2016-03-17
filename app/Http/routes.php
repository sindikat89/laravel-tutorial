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


// Routes for administrators ADMIN
Route::group(array('prefix' => 'cms'), function () {

// =======================================================================//
//  					UNAUTHENTICATED ROUTES (ADMIN)					  //
// =======================================================================//

    Route::group(array('middleware' => 'adminguest'), function () {

        Route::get('/', array(
            'as' => 'cms',
            'uses' => 'AdminController@adminLogin',
        ));

        // Sign in (POST)
        Route::post('admin-login-post', array(
            'as' => 'admin-login-post',
            'uses' => 'AdminController@postSignIn',
        ));
    });

// =======================================================================//
//  					AUTHENTICATED ROUTES (ADMIN)					  //
// =======================================================================//

    Route::group(array('middleware' => 'adminauth'), function () {

        Route::get('dashboard', array(
            'as' => 'admin-dashboard',
            'uses' => 'AdminController@getDashboard',
        ));

        //GET route for 'admin logout'
        Route::get('admin-logout', array(
                'as' => 'admin-logout',
                'uses' => 'AdminController@adminLogout',
        ));

    });
});
