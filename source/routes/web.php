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
        Route::get('users', 'UserController@index')->name('users');
        Route::get('roles', 'RoleController@index')->name('roles');
        Route::get('roles/create', 'RoleController@create')->name('roles.create');
        Route::post('roles/create', 'RoleController@store');
        Route::get('users/{id?}/edit', 'UserController@edit');
        Route::post('users/{id?}/edit', 'UserController@update');
        Route::get('/', 'AdminPageController@home')->name('admin');
        Route::get('products', 'ProductController@index')->name('products');
        Route::get('products/create', 'ProductController@create')->name('products.create');
        Route::post('products/create', 'ProductController@store');
        Route::get('products/{id?}/edit', 'ProductController@edit');
        Route::post('products/{id?}/edit', 'ProductController@update');
        Route::get('products/{id?}/delete', 'ProductController@delete');
        Route::get('categories', 'CategoryController@index')->name('categories');
        Route::get('categories/create', 'CategoryController@create')->name('categories.create');
        Route::post('categories/create', 'CategoryController@store');

    }
);
