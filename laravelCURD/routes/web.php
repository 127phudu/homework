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

Route::get('/', 'Category@index');

//category
Route::get('/category', 'Category@index');
Route::get('/category/insert', 'Category@insert');
Route::get('/category/{id}/edit', 'Category@edit');
Route::get('/category/{id}/delete', 'Category@delete');
Route::post('/category', 'Category@create');
Route::post('/category/{id}', 'Category@update');
Route::get('/category/{id}/destroy', 'Category@destroy');

//category
Route::get('/product', 'Product@index');
Route::get('/product/insert', 'Product@insert');
Route::get('/product/{id}/edit', 'Product@edit');
Route::get('/product/{id}/delete', 'Product@delete');
Route::post('/product', 'Product@create');
Route::post('/product/{id}', 'Product@update');
Route::get('/product/{id}/destroy', 'Product@destroy');

//comment
Route::get('/comment', 'Comment@index');
Route::get('/comment/insert', 'Comment@insert');
Route::get('/comment/{id}/edit', 'Comment@edit');
Route::get('/comment/{id}/delete', 'Comment@delete');
Route::post('/comment', 'Comment@create');
Route::post('/comment/{id}', 'Comment@update');
Route::get('/comment/{id}/destroy', 'Comment@destroy');