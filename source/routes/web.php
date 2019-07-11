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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cart', 'CartController@show');
Route::post('/cart', 'CartController@create')->name('addcart');
Route::get('/products/detail/{id?}','ProductController@detail');
Route::get('/order','OrderController@checkout');
Route::get('/cart/destroy','CartController@destroy')->name('destroyCart');

Route::group(
    array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'),
    function () {
        Route::get('users', [
            'as' => 'admin.user.index', 'uses' => 'UsersController@index'
        ]);
        Route::get('roles', 'RolesController@index');
        Route::get('roles/create', 'RolesController@create')->name('roles.create');
        Route::post('roles/create', 'RolesController@store');
        Route::get('users/{id?}/edit', 'UsersController@edit');
        Route::post('users/{id?}/edit', 'UsersController@update');
        Route::get('/', 'AdminPagesController@home')->name('admin');
    }
);
