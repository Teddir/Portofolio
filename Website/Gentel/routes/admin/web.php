<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('login', 'Auth\AdminAuthController@postLogin');

Route::group(['middleware' => 'auth:admin'], function () {

  Route::get('/', function () {
    return view('tampilan.index');
});

});