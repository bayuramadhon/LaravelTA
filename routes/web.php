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

// Route::redirect('/home', '/Daftarprocurement');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function() {
    Route::get('/Dataprocurement', 'dataperusahaan@index');
    Route::get('/Daftarprocurement', function () {
        return view('daftarproc');
    });
    // Route::post('/Dataprocurement', 'dataperusahaan@store');
    Route::post('/Daftarprocurement', 'dataperusahaan@store');
    // Route::get('/Dataprocurement', 'dataperusahaan@create');
    // Route::post('/Dataprocurement', 'dataperusahaan@store');
    Route::get('/Dataprocurement/edit/{id}', 'dataperusahaan@edit');
    Route::post('/Dataprocurement/edit/{id}', 'dataperusahaan@update');
    Route::get('/Dataprocurement/delete/{id}', 'dataperusahaan@destroy');

    // Route::redirect('/home', '/Daftarprocurement');


    Route::post('/Daftarprocurement', 'dataperusahaan@store');

    Route::get('/persyaratan_umum/{id_perusahaan}', function () {
    return view('persyratanumum');
    });

    Route::post('/persyaratan_umum/{id_perusahaan}', 'persyaratanumumController@store');
    Route::get('/persyaratan_umum/edit/{id}', 'persyaratanumumController@edit');
    Route::post('/persyaratan_umum/edit/{id}', 'persyaratanumumController@update');

    Route::get('/keuanganpajak/{id_perusahaan}', function () {
        return view('datakeu_pajak');
        });

    Route::post('/keuanganpajak/{id_perusahaan}', 'keupajakController@store');
    Route::get('/keuanganpajak/edit/{id}', 'keupajakController@edit');
    Route::post('/keuanganpajak/edit/{id}', 'keupajakController@update');

    Route::get('/akteperusahaan/{id_perusahaan}', function () {
        return view('akteperusahaan');
        });

    Route::post('/akteperusahaan/{id_perusahaan}', 'akteperuController@store');
    Route::get('/akteperusahaan/edit/{id}', 'akteperuController@edit');
    Route::post('/akteperusahaan/edit/{id}', 'akteperuController@update');


    Route::get('/VerifikasiQSHE/{id_perusahaan}', function () {
        return view('verifikasiQSHE');
    });

    Route::post('/VerifikasiQSHE/{id_perusahaan}', 'QSHEController@store');
    Route::get('/VerifikasiQSHE/edit/{id}', 'QSHEController@edit');
    Route::post('/VerifikasiQSHE/edit/{id}', 'QSHEController@update');
    Route::get('/Hasilpemenang', function () {
        return view('Datavendor.Hasilpemenang');
    });


    // Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    // Route::post('/login','AuthAdmin\LoginController@Login')->name('admin.login.submit');
    // Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/password/reset', 'AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'AuthAdmin\ResetPasswordController@reset');
});


