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

Route::get('/', ['as' => 'articles.erd', 'uses' => 'ArticleController@erd']);

Route::get('/artikel', ['as' => 'articles.index', 'uses' => 'ArticleController@index']);

Route::get('/artikel/create', ['as' => 'articles.create', 'uses' => 'ArticleController@create']);
Route::post('/artikel', ['as' => 'articles.store', 'uses' => 'ArticleController@store']);
Route::get('/artikel/{id}', ['as' => 'articles.show', 'uses' => 'ArticleController@show']);

Route::get('/artikel/{id}/edit', ['as' => 'articles.edit', 'uses' => 'ArticleController@edit']);
Route::put('/artikel/{id}', ['as' => 'articles.update', 'uses' => 'ArticleController@update']);

Route::delete('/artikel/{id}', ['as' => 'articles.destroy', 'uses' => 'ArticleController@destroy']);
