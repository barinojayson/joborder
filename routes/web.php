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

// form sample
Route::get('/register',function(){
   return view('register');
});

Route::post('/user/register',array('uses'=>'UserRegistration@postRegister'));

// blade sample
Route::get('blade', function () {
   return view('page',array('name' => 'Jayson Barino'));
});

// creating form using htmlserviceprovider sample
Route::get('/form',function(){
   return view('form');
});

// sample using model
Route::get('/product',array('uses'=>'ProductController@index'));



