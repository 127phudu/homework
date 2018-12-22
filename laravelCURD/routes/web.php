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

//Index
Route::get('/category', 'Category@index');


//Insert
Route::get('/category/insert', 'Category@insert');


//Edit
Route::get('/category/{id}/edit', 'Category@edit');


//Delete
Route::get('/category/{id}/delete', 'Category@delete');