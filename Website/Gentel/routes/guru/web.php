<?php
//----------------------------------------->DASHBOAD Guru

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/profile', function () {
  return view('gurudash.profil');
});

Route::group(['middleware' => 'auth'], function () {

  //-----------------------------------------> Akun

//-----------------------------------------> Home
//---------------------> Article
Route::get('/artikel', 'ArtikelController@index');
Route::get('/create_artikel', 'ArtikelController@create');
Route::post('/tambah_artikel', 'ArtikelController@store');

Route::get('/update_artikel/{id}', 'ArtikelController@edit');
Route::put('/ubah_artikel/{id}', 'ArtikelController@update');
Route::get('/delete_artikel/{id}', 'ArtikelController@destroy');
//--------------------->Breaking News
Route::get('/berita', 'BeritaController@index');
Route::get('/create_berita', 'BeritaController@create');
Route::post('/tambah_berita', 'BeritaController@store');

Route::get('/update_berita/{id}', 'BeritaController@edit');
Route::put('/ubah_berita/{id}', 'BeritaController@update');
Route::get('/delete_berita/{id}', 'BeritaController@destroy');

//-----------------------------------------> Akademik
//---------------------> Kalender_pendidikan
Route::get('/kalender', 'AkademikController@index');
Route::get('/create_kalender', 'AkademikController@create');
Route::post('/tambah_kalender', 'AkademikController@store');
Route::get('/delete_akademik/{id}', 'AkademikController@destroy');
//---------------------> Prestasi
Route::get('/prestasi', 'PrestasiController@index');
Route::get('/create_prestasi', 'PrestasiController@create');
Route::post('/tambah_prestasi', 'PrestasiController@store');

Route::get('/update_prestasi/{id}', 'PrestasiController@edit');
Route::put('/ubah_prestasi/{id}', 'PrestasiController@update');
Route::get('/delete_prestasi/{id}', 'PrestasiController@destroy');
//---------------------> Dewan Guru
Route::get('/dewan_guru', 'ArtikelController@guru');
Route::get('/register', 'ArtikelController@register');
Route::post('/create_guru', 'ArtikelController@create1');

//-----------------------------------------> Informasi
//---------------------> tatib
Route::get('/syarat', 'PengasuhanController@index');
Route::get('/tatib', 'PengasuhanController@index1');
Route::get('/create_syarat', 'PengasuhanController@create');
Route::get('/create_tatib', 'PengasuhanController@create1');
Route::post('/tambah_pengasuhan', 'PengasuhanController@store');
Route::get('/delete_pengasuhan/{id}', 'PengasuhanController@destroy');
//---------------------> Ekstrakuli
Route::get('/ekstrakuli', 'EkstrakuliController@index');
Route::get('/create_ekstrakuli', 'EkstrakuliController@create');
Route::post('/tambah_ekstrakuli', 'EkstrakuliController@store');

Route::get('/update_ekstrakuli/{id}', 'EkstrakuliController@edit');
Route::put('/ubah_ekstrakuli/{id}', 'EkstrakuliController@update');
Route::get('/delete_ekstrakuli/{id}', 'EkstrakuliController@destroy');
//---------------------> Harian
Route::get('/harian', 'HarianController@index');
Route::get('/create_harian', 'HarianController@create');
Route::post('/tambah_harian', 'HarianController@store');

Route::get('/update_harian/{id}', 'HarianController@edit');
Route::put('/ubah_harian/{id}', 'HarianController@update');
Route::get('/delete_harian/{id}', 'HarianController@destroy');

//-----------------------------------------> Galeri&Lokasi
//---------------------> Galeri
Route::get('/galeri', 'GaleriloController@index');
Route::get('/message', 'GaleriloController@index1');
Route::get('/create_galeri', 'GaleriloController@create');
Route::post('/tambah_galeri', 'GaleriloController@store');
Route::post('/tambah_galeri1', 'GaleriloController@store1');        //-------->hanya untuk email dll
Route::get('/delete_galeri/{id}', 'GaleriloController@destroy');

});
