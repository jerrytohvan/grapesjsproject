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

Route::get('/', 'SkuController@index')->name('retrieve.all');



Route::post('/content/store/{id}', 'ContentPageController@store')->name('content.store');
Route::get('/content/load/{id}', 'ContentPageController@load')->name('content.load');
Route::get('/retrieve/sku/{id}', 'SkuController@getSkuName')->name('retrieve.sku');
