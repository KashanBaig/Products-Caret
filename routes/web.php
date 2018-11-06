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


// get all the products
Route::get('/products', 'ProductController@getProducts');

// get a single product
Route::get('/product/{id}', 'ProductController@getProduct');

// delete a product
Route::delete('/product/{id}', 'ProductController@destroyProduct');

// update a product
Route::put('/product/{id}', 'ProductController@updateProduct');
