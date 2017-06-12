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


Route::group(['middleware' => 'web'], function () {
    // customers
	Route::get('/customer',array('uses'=>'CustomerController@index'));
	Route::get('/customer/{id}',array('uses'=>'CustomerController@show'));
	Route::post('/customer/add',array('uses'=>'CustomerController@save'));
	Route::put('/customer/update/{id}',array('uses'=>'CustomerController@update'));
	Route::put('/customer/delete/{id}',array('uses'=>'CustomerController@delete'));
	Route::post('/shop/add',array('uses'=>'CheckoutProductController@addToCart'));
});






