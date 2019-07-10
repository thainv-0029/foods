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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'HomeController@index');
Route::post('/cart', 'CartController@store')->name('add_cart');

Route::group(
    array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'),
    function () {
        Route::get('users', [
            'as' => 'admin.user.index', 'uses' => 'UserController@index'
        ]);
        Route::get('roles', 'RoleController@index');
        Route::get('roles/create', 'RoleController@create')->name('roles.create');
        Route::post('roles/create', 'RoleController@store');
        Route::get('users/{id?}/edit', 'UserController@edit');
        Route::post('users/{id?}/edit', 'UserController@update');
        Route::get('/', 'AdminPageController@home')->name('admin');
        Route::get('products', 'ProductController@index');
    }
);
