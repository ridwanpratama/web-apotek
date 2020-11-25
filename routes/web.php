<?php

use Illuminate\Support\Facades\Route;

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

Route::get('login', function () {
    return view('user.login');
})->name('login');

Route::post('postlogin', 'LoginController@login')->name('postlogin');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('obat', 'ObatController@index')->name('obat');
    Route::get('create_obat', 'ObatController@create')->name('create_obat');
    Route::post('simpan_obat', 'ObatController@store')->name('simpan_obat');
    Route::get('edit_obat/{id}', 'ObatController@edit')->name('edit_obat');
    Route::post('update_obat/{id}', 'ObatController@update')->name('update_obat');
    Route::get('delete_obat/{id}', 'ObatController@destroy')->name('destroy_obat');
    
    Route::get('pemasok', function () {
        return view('pemasok.index');
    })->name('pemasok');
    
    Route::get('create_pemasok', function () {
        return view('pemasok.create');
    })->name('create_pemasok');
    
    Route::get('edit_pemasok', function () {
        return view('pemasok.edit');
    })->name('edit_pemasok');
});

Route::group(['middleware' => ['auth', 'ceklevel:kasir']], function () {
    Route::get('transaksi', 'TransaksiController@index')->name('transaksi');
    Route::get('create_transaksi', 'TransaksiController@create')->name('create_transaksi');
    Route::post('simpan_transaksi', 'TransaksiController@store')->name('simpan_transaksi');
    Route::get('edit_transaksi/{id}', 'TransaksiController@edit')->name('edit_transaksi');
    Route::post('update_transaksi/{id}', 'TransaksiController@update')->name('update_transaksi');
    Route::get('delete_transaksi/{id}', 'TransaksiController@destroy')->name('destroy_transaksi');
});

Route::group(['middleware' => ['auth', 'ceklevel:manager']], function () {
    Route::get('user', 'UserController@index')->name('user');
    Route::get('create_user', 'UserController@create')->name('create_user');
    Route::post('simpan_user', 'UserController@store')->name('simpan_user');
    Route::get('edit_user/{id}', 'UserController@edit')->name('edit_user');
    Route::post('update_user/{id}', 'UserController@update')->name('update_user');
    Route::get('delete_user/{id}', 'UserController@destroy')->name('delete_user');
});
