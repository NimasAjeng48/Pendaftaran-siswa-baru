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
Auth::routes();
Route::group(['middleware'=>['auth','admin']],function(){
    Route::resource('pendaftaran','pendaftaranController');
    Route::resource('nilai','nilaiController');
    Route::resource('jurusan','jurusanController');
    Route::resource('wali','waliController');
    

 
    
    Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('daftar','pendaftaransiswaController');
Route::resource('nilaisiswa','nilaisiswaController');

Route::get('/create','nilaisiswaController@create');
Route::get('/store','nilaisiswaController@store');
Route::resource('walisiswa','walisiswaController');

Route::get('/diri', 'diriController@index')->name('diri');
Route::get('/formnilai', 'formnilaiController@index')->name('formnilai');
Route::get('/formwali', 'formwaliController@index')->name('formwali');
Route::get('/logout','\App\Http\Controllers\Auth\LoginController@logout');


