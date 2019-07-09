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

Route::get('/', 'MoviesController@index');
Route::get('filmes/{id}', 'MoviesController@findById')->where('id', '[0-9]+');
Route::get('filmes/{id}/{type}', 'MoviesController@find')->where(['id' => '[0-9]+', 'type'=> '[A-Za-z]+']);
