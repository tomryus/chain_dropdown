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

Route::get('/', 'MainController@index')->name('main.index');

Route::get('/getCity/{id}', 'MainController@getCity')->name('main.getCity');
Route::get('/getCamat/{id}', 'MainController@getCamat')->name('main.getCamat');
Route::get('/getDesa/{id}', 'MainController@getDesa')->name('main.getDesa');
Route::post('/req', 'MainController@Store')->name('main.req');