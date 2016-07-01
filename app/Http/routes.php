<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
CALLING VIEW FROM ROUTES
Route::get('/', function () {
    return view('welcome');
});*/

/*Calling Controller*/
Route::get('/', 'PagesController@index');
Route::get('about/', 'PagesController@about');
Route::get('product/', 'PagesController@product');
Route::get('product/detail/', 'PagesController@productDetail');
Route::get('contact/', 'PagesController@contact');
