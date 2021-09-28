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
Route::get('/store','InternController@getform')->name('Intern.form');
Route::post('/store/submit','InternController@submitform')->name('Intern.form.submit');
Route::get('/table','InternController@gettable')->name('Intern.table');
Route::get('/delete/{id}','InternController@deleteform')->name('Intern.form.delete');
Route::get('/edit/{id}','InternController@edittable')->name('Intern.form.edit');
Route::post('/update/{id}','InternController@updateform')->name('Intern.form.update');
