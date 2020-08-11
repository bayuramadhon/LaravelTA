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

Route::get('/home', function () {
    return view('home');
});

Route::get('/Dataprocurement', 'dataperusahaan@index');
// Route::post('/Dataprocurement', 'dataperusahaan@store');
Route::post('/Daftarprocurement', 'dataperusahaan@store');
// Route::get('/Dataprocurement', 'dataperusahaan@create');

Route::redirect('/home', '/Daftarprocurement');

Route::get('/Daftarprocurement', function () {
return view('daftarproc');
});

Route::get('/persyaratan_umum', function () {
return view('persyratanumum');
});
Route::post('/persyaratan_umum', 'persyaratanumumController@store');

Route::get('/keuanganpajak', function () {
    return view('datakeu_pajak');
    });
    

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function() {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','AuthAdmin\LoginController@Login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});


