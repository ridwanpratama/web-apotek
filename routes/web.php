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

// SPEEDRUN BIKIN VIEW WKWKWKWKWK

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('login', function () {
    return view('user.login');
})->name('login');

Route::get('user', function () {
    return view('user.index');
})->name('user');

Route::get('create_user', function () {
    return view('user.create');
})->name('create_user');

Route::get('edit_user', function () {
    return view('user.edit');
})->name('edit_user');

Route::get('edit_obat', function () {
    return view('obat.edit');
})->name('edit_obat');

Route::get('obat', function () {
    return view('obat.index');
})->name('obat');

Route::get('create_obat', function () {
    return view('obat.create');
})->name('create_obat');

Route::get('pemasok', function () {
    return view('pemasok.index');
})->name('pemasok');

Route::get('create_pemasok', function () {
    return view('pemasok.create');
})->name('create_pemasok');

Route::get('edit_pemasok', function () {
    return view('pemasok.edit');
})->name('edit_pemasok');
