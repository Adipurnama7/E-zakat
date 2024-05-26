<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/zakat_penghasilan', function () {
    return view('penghasilan');
});

Route::get('/zakat_maal', function () {
    return view('maal');
});

Route::get('/perdagangan', function () {
    return view('perdagangan');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/emas', function () {
    return view('emas');
});

Route::get('/tabungan', function () {
    return view('tabungan');
});

Route::get('/perusahaan', function () {
    return view('perusahaan');
});


Route::get('/dasboard', function () {
    return view('pages.Dashboard.dasboard');
});





Route::get('/register', function () {
    return view('register');
});


Route::get('/muzzaki', function () {
    return view('muzzaki');
});



Route::get('/daftar', [App\Http\Controllers\Registercontroller::class, 'create']);
Route::post('/daftar', [App\Http\Controllers\Registercontroller::class, 'store']);

Route::resource('zakat', \App\Http\Controllers\ZakatController::class);

Route::resource('Masjid', \App\Http\Controllers\MesjidController::class);

Route::resource('penyaluran', \App\Http\Controllers\PenyaluranController::class);

Route::resource('dashboard', \App\Http\Controllers\DashboardControler::class);

Route::resource('pembayaran', \App\Http\Controllers\PembayaranController::class);

Route::resource('muzzaki', \App\Http\Controllers\muzzakiController::class);
Route::resource('donasi', \App\Http\Controllers\DonasiController::class);

Route::get('/masuk', [App\Http\Controllers\LoginController::class, 'index']);

Route::post('/masuk', [App\Http\Controllers\LoginController::class, 'login']);
