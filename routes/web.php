<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'AccueilController@show');
Route::get('/contact', 'ContactController@contact');
Route::get('/magasin', 'MagasinController@magasin');
Route::get('/panier', 'PanierController@panier');
Route::get('/panier', 'ProductController@product');



//Route::get('/home', 'HomeController@index');
