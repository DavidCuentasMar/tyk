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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::post('/product/search', 'ProductController@search')->name('product.search');
Route::post('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/delete', 'ProductController@delete')->name('product.delete');
Route::post('/product/buy', 'ProductController@buy')->name('product.buy');
Route::get('/product/details/{product_id}', 'ProductController@details')->name('product.details');

Route::get('/user/vendedores', 'HomeController@vendedores')->name('user.vendedores');
Route::post('/user/products', 'HomeController@userProducts')->name('user.products');


