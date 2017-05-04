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

Route::get('/login', function () {
	return view('login');
});

Route::get('/register', function () {
	return view('register');
});

Route::get('/home_admin', function () {
	return view('admin.home_admin');
});

Route::get('/penguji', function(){
	return view('penguji');
});

Route::get('/pendidikan', function(){
	return view('pendidikan');
});
Route::get('/penerima', function(){
	return view('penerima');
});


Route::get('/seleksi', function(){
	return view('seleksi');
});
Route::get('/seleksi/lolos', function(){
	return view('seleksiLolos');
});
Route::get('/seleksi/gagal', function(){
	return view('seleksiGagal');
});
Route::get('/seleksi/hapus', function(){
	return view('seleksi1');
});

Route::get('/datawawancara', function(){
	return view('datawawancara');
});
Route::get('/wawancara', function(){
	return view('wawancara');
});
Route::get('/wawancara/diterima', function(){
	return view('wawancara1');
});