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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', 'UserController@login')->name('user.login');
Route::post('/login', 'UserController@verify');

Route::get('/register', 'UserController@add')->name('user.register');
Route::post('/register', 'UserController@store');

Route::get('/home', 'UserController@index')->name('home.index');

Route::get('/logout', 'LogoutController@index')->name('logout.index');
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/add', 'ProductController@add')->name('product.add');
Route::post('/product/add', 'ProductController@store');

Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}', 'ProductController@editstore');

Route::get('/product/delete/{id}', 'ProductController@delete')->name('product.delete');
Route::get('/product/load', 'ProductController@allload');

Route::get('/product/load/{id}', 'ProductController@load')->name('product.load');


Route::get('/user', 'UserController@list')->name('user.index');
Route::get('/user/add', 'UserController@add')->name('user.add');
Route::post('/user/add', 'UserController@store');

Route::get('/user/edit/{id}', 'UserController@edit')->name('user.edit');
Route::post('/user/edit/{id}', 'UserController@editstore');

Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
Route::get('/user/load', 'UserController@allload');

Route::get('/user/load/{id}', 'UserController@load')->name('user.load');