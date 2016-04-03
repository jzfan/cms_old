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



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Route::get('admin', function(){
//     return 'aaaaaa';
// });

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('admin/login', 'Auth\AdminController@getLogin');
    Route::post('admin/login', 'Auth\AdminController@postLogin');
    Route::get('admin/logout', 'Auth\AdminController@logout');
    Route::get('admin/register', 'Auth\AdminController@getRegister');
    Route::post('admin/register', 'Auth\AdminController@postRegister');
    Route::get('admin', 'AdminController@index');   
});
