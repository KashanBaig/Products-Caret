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

// add product
Route::get('/ProdForm', 'ProductController@ProdForm');

// delete a product
Route::get('/deleteProduct/{id}', 'ProductController@destroyProduct');

// add a product
Route::post('/addProduct', 'ProductController@addProduct');

// update a product
Route::put('/editProduct/{id}', 'ProductController@updateProduct');
