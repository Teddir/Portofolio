<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('login', 'Auth\SiswaAuthController@getLogin')->name('siswa.login');
Route::post('login', 'Auth\SiswaAuthController@postLogin');

Route::post('/create', 'SiswaController@store');
Route::get('/register', 'SiswaController@create');

Route::group(['middleware' => 'auth:siswa'], function () {


});

//----------------------------------------->DASHBOAD SISWA
Route::get('/profile', function () {
  return view('siswadash.profil');
});

Route::get('/dashboard', function () {
  return view('siswadash.dashboard');
});

Route::get('/persyaratan', function () {
  return view('siswadash.persyaratan');
});