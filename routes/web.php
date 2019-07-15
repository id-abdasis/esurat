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

Route::post('login', 'AuthController@login')->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/tambah-surat', 'SuratController@index')->name('tambah-surat');
    Route::post('tambah-surat', 'SuratController@store')->name('tambah-surat');
    Route::get('/daftar-surat', 'SuratController@daftar_surat')->name('daftar-surat');
    Route::get('/edit-surat/{id}', 'SuratController@edit')->name('edit-surat');
    Route::post('/update-surat/{id}', 'SuratController@update')->name('update-surat');
    Route::get('users/{id}', 'SuratController@destroy')->name('hapus-surat');

});

Route::get('login', function (){
    return view('login');
})->name('login');


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
