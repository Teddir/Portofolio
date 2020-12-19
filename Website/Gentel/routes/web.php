<?php

use Illuminate\Support\Facades\Auth;
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

//---------------------------------------------------> route auth 

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
//---------------------------------------------------> route akademik 


Route::get('/', 'BeritaController@index1');
Route::get('/detail_artikel/{id}', 'BeritaController@detailA');
Route::get('/detail_berita/{id}', 'BeritaController@detailB');



//---------------------------------------------------> route akademik 

Route::get('/profil', function () {
    return view('tampilan.akademik.profil');
});


Route::get('/prestasi', 'PrestasiController@tampilan');
Route::get('/kalender', 'AkademikController@index1');
Route::get('/guru', 'ArtikelController@tampilan');
Route::get('/syaratnaik', 'PengasuhanController@tampilan');
Route::get('/tatibsiswa', 'PengasuhanController@tampilan1');
Route::get('/ekstraku', 'EkstrakuliController@tampilan');
Route::get('/harian', 'HarianController@tampilan');
Route::get('/galeri', 'GaleriloController@tampilan');
Route::get('/lokasi', 'GaleriloController@tampilan1');



Route::get('/alumni', function () {
    return view('tampilan.akademik.alumni');
});

//---------------------------------------------------> route program 

Route::get('/program', function () {
    return view('tampilan.program.mts');
});

//---------------------------------------------------> route Informasi 
//---------------------------------------------------> route Informasi -> pengasuhan
//---------------------------------------------------> route Informasi -> kegiatan


//---------------------------------------------------> route Galeri & Lokasi -> lokasi




Route::get('/detailA', function () {
    return view('tampilan.index_detailA ');
});

//-----------------------------------------> Home
Route::post('/create_pesan', 'BerandaController@store');
