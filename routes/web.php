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
    return view('index');
});

Route::get('/data-tables', function () {
	return view('dataTables');
});

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/jawaban/{id}','JawabanController@index');
Route::post('/jawaban/{id}','JawabanController@store');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::post('/pertanyaan/{id}/update','PertanyaanController@update');
Route::get('/pertanyaan/{id}/delete','PertanyaanController@delete');

Route::get('/jawaban/{id}/edit','JawabanController@edit');
Route::post('/jawaban/{id}/update','JawabanController@update');
Route::get('/jawaban/{id}/delete','JawabanController@delete');