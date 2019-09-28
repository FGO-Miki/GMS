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



Route::get('/subjects', 'SubjectsController@index');
Route::get('/subjects/add', 'SubjectsController@add');
Route::post('/subjects/store', 'SubjectsController@store');

Route::get('/strands', 'SubjectsController@index');
Route::get('/strands/add', 'SubjectsController@index');
Route::post('/strands/store', 'SubjectsController@index');

Route::get('/teachers');
Route::get('/teachers/add');
Route::post('/teachers/store');

Route::get('/sections');
Route::get('/sections/add');
Route::post('/sections/store');

Route::get('/subject-strands');
Route::get('/subject-strands/add');
Route::post('/subject-strands/store');