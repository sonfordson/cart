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

Route::get('/', ['uses' => 'ProductController@getIndex','as' => 'product.index','middleware' => 'auth']);

Route::get('/add-to-cart/{id}', ['uses' => 'ProductController@getAddToCart','as' => 'product.addToCart','middleware' => 'auth']);

Route::get('/shoppingCart', ['uses' => 'ProductController@getCart','as' => 'product.shoppingCart','middleware' => 'auth']);

Route::get('/checkout', ['uses' => 'ProductController@getCheckout','as' => 'checkout','middleware' => 'auth']);

Route::post('/checkout', ['uses' => 'ProductController@postCheckout','as' => 'checkout','middleware' => 'auth']);

Route::auth();

Route::get('/home', 'HomeController@index');
