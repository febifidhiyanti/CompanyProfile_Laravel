<?php

use Illuminate\Support\Facades\Route;

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

    //Product
    Route::get('/product', 'BerandaController@index');

    //Company
    Route::get('/company', 'BerandaController@company');

    //Contact
    Route::get('/contact', 'BerandaController@contact');

    //profile
    Route::get('profile', 'ProfileController@index');
    Route::post('profile/update', 'ProfileController@update');



    // USER
    Route::get('/home', function () {
      return view('user.welcome');
    });

    //home
    Route::get('/', function () {
      return view('user.welcome');
    });

