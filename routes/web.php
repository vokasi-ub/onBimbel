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

Route::get('master', function () {
    return view('master.app');
});

Route::get('/siswa/cari','BimbleController@cari');

//----- Siswa -----

route::get('/datasiswa/index','BimbleController@index');

Route::get('/datasiswa/siswa','BimbleController@tambah');

Route::post('/tambahsiswa/tambah','BimbleController@tambahsiswa');

Route::get('/bimblesiswa/edit/{idSiswa}','BimbleController@edit');

Route::post('/datasiswa/update','BimbleController@update');

Route::get('/hapus/destroy/{idSiswa}','BimbleController@destroy');

//----- Jadwal -----

Route::get('/jadwal/index','jadwalController@jadwal');

Route::get('/jadwal/goadd','jadwalController@tambah');

Route::post('/jadwal/tambah','jadwalController@tambahjadwal');

Route::get('/jadwal/destroy/{idJadwal}','jadwalController@destroy');

//----- Mapel -----

Route::get('/mapel/index','MapelController@mapel');

Route::get('/mapel/goadd','MapelController@tambah');

Route::post('/mapel/tambah','MapelController@tambahmapel');

Route::get('/mapel/destroy/{idMapel}','MapelController@destroy');

//----- Login -----

Route::get('bimbleonline', 'LoginController@login');
Route::post('/loginPost', 'LoginController@loginPost');
Route::get('/register', 'LoginController@register');
Route::post('/registerPost', 'LoginController@registerPost');
Route::get('/logout', 'LoginController@logout');
