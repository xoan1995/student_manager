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
Route::group(['prefix' => 'students'], function () {
    Route::get('index', 'StudentController@index')->name('students.index');
    Route::get('read/{id}', 'StudentController@read')->name('students.read');
    Route::get('create', 'StudentController@create')->name('students.create');
    Route::post('store', 'StudentController@store')->name('students.store');
    Route::get('edit/{id}', 'StudentController@edit')->name('students.edit');
    Route::post('update/{id}', 'StudentController@update')->name('students.update');
    Route::get('destroy/{id}', 'StudentController@destroy')->name('students.delete');
});

