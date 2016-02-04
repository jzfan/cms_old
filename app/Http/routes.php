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

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'IndexController@index');

});

Route::group(['middleware' => 'admin'], function () {   
    Route::get('/admin', 'AdminController@index');
    Route::resource('/admin/user', 'UserController', ['except'=>'show']);
    Route::resource('/admin/role', 'RoleController', ['except'=>'show']);
    Route::resource('/admin/perm', 'PermissionController', ['except'=>'show']);
    Route::resource('/admin/category', 'CategoryController', ['except'=>'show']);
    // Route::resource('/admin/perm', 'PermissionController', ['except'=>'show']);
});


Route::get('test', 'IndexController@test');