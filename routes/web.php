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

// Route::get('/', function () {
// 	// $tanggal = "hari ini";
// 	$tanggal = date("d-m-Y H:i:s", time());
//     return view('welcome')->with('tanggal', $tanggal);
// });//Manggil Tanggal ke Welcome

Route::get('/', function () {
    return view('inirumah');
});

Route::get('about', function () {
    return view('about');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('halo', function () {
    return view('halo');
});

Route::get('halo/bebas', function () {
    return view('terserah.bebas');
});

Route::get('bebas', function () {
    return view('terserah.bebas');
});