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
})->name('welcome');

Route::get('/rooms', function () {
	return view('room.index');
})->name('room.index');

Route::get('/tour', function () {
	return view('tour.index');
})->name('tour.index');
