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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
	return redirect('login');
});
// Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['prefix'=>'manage','as'=>'manage.', 'middleware' => 'role:superadministrator|administrator|editor|author|contributor'], function(){
    Route::get('/', ['as' => 'index', 'uses' => 'ManageController@index']);
    Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'ManageController@dashboard']);
    Route::resource('/users', 'UserController');
    Route::resource('/permissions', 'PermissionController', ['except' => 'destroy']);
    Route::resource('/roles', 'RoleController', ['except' => 'destroy']);
});

Route::get('/home', 'HomeController@index')->name('home');
