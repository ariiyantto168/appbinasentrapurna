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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');


// asuransi
Route::get('/asuransi', 'AsuransiController@index')->name('index');
Route::get('/asuransi/create-new', 'AsuransiController@create_page')->name('create');
Route::post('/asuransi/create-new', 'AsuransiController@save_page')->name('create');
Route::get('/asuransi/update/{asuransi}', 'AsuransiController@update_page')->name('update');
Route::post('/asuransi/update/{asuransi}', 'AsuransiController@update_save')->name('update');
Route::delete('/asuransi/update/{asuransi}', 'AsuransiController@delete')->name('delete');

// kantorcabangs
Route::get('/kantor', 'KantorcabangController@index')->name('index');
Route::get('/kantor/create-new', 'KantorcabangController@create_page')->name('create');
Route::post('/kantor/create-new', 'KantorcabangController@save_page')->name('create');

// tipe Bangunan
Route::get('/bangunan', 'BangunanController@index')->name('index');
Route::get('/bangunan/create-new', 'BangunanController@create_page')->name('create');
Route::post('/bangunan/create-new', 'BangunanController@save_page')->name('create');