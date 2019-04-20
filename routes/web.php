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
Route::get("/home/sellsmodule", function(){
    return view('sellsmodule.index');
 })->name('home.sellsmodule');
 
Route::get('/home/sellsmodule/product', function(){
    return view('sellsmodule.product');
 })->name('home.sellsmodule.product');

Route::get('/home/sellsmodule/product/add', 'ProductController@create')->name('home.sellsmodule.addproduct');
Route::post('/home/sellsmodule/product/add', 'ProductController@store')->name('home.sellsmodule.addproduct');

Route::get('/home/sellsmodule/products', 'ProductController@index')->name('home.sellsmodule.products');

Route::get('/home/sellsmodule/dailysell', function(){
    return view('sellsmodule.dailysell');
 })->name('home.sellsmodule.dailysell');

Route::get('/home/sellsmodule/dailysell/add', 'DailySellController@create')->name('home.sellsmodule.adddailysell');
Route::post('/home/sellsmodule/dailysell/add', 'DailySellController@store')->name('home.sellsmodule.adddailysell');

Route::get('/home/sellsmodule/dailysells', 'DailySellController@index')->name('home.sellsmodule.dailysells');