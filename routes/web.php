<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $nama = "Rahma";
    $jk = "Perempuan";
    $pt = "SMK";
    $pekerjaan = "-";

    return view('data_diri', compact('nama','jk','pt','pekerjaan'));
});

Route::get('/angkasa', function () {

    $planet1 = "Merkurius";
    $planet2 = "Venus";
    $planet3 = "Bumi";
    $planet4 = "Mars";
    $planet5 = "Jupiter";
    $planet6 = "Saturnus";
    $planet7 = "Uranus";
    $planet8 = "Neptunus";

    return view('materi', compact('planet1','planet2','planet3','planet4','planet5','planet6','planet7','planet8'));
});

Route::get('/about2/{nama}/{jk}/{pt}/{pekerjaan}/{alamat}', function (Request $request, $nama, $jk, $pt, $pekerjaan, $alamat) {
    $nama2 = $nama;
    $jk2 = $jk;
    $pt2 = $pt;
    $pekerjaan2 = $pekerjaan;
    $alamat2 = $alamat;
    return view('biodata',compact('nama2','jk2','pt2','pekerjaan2','alamat2'));
});
