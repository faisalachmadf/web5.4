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

Route::get('/ncuy', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('index');
});

/* Profile */

Route::get('selayang-pandang', function () {
    return view('profile.selayangpandang');
});

Route::get('Visi-dan-Misi', function () {
    return view('profile.visimisi');
});

Route::get('Tugas-Pokok-dan-Fungsi', function () {
    return view('profile.tupoksi');
});

Route::get('Struktur-Organisasi', function () {
    return view('profile.struktur');
});

Route::get('prestasi', function () {
    return view('profile.prestasi');
});

/* Bagian */

Route::get('Urusan-Pemerintahan-Daerah', function () {
    return view('bagian.urpemda');
});

Route::get('Tata-Pemerintahan', function () {
    return view('bagian.tapem');
});

Route::get('Kerjasama', function () {
    return view('bagian.kerjasama');
});

/* Produk Hukum */

Route::get('/Produk-Hukum', function () {
    return view('produkhukum.produkhukum');
});    

/* Berita */

Route::get('/Berita/Berita-Umum', function () {
    return view('berita.beritaumum');
});

Route::get('/Berita/Berita-Urusan-Pemerintahan-Daerah', function () {
    return view('berita.beritaurpemda');
});

Route::get('/Berita/Berita-Tata-Pemerintahan', function () {
    return view('berita.beritatapem');
});

Route::get('/Berita/Berita-Kerjasama-Dalam-Negeri', function () {
    return view('berita.beritadalamnegeri');
});

Route::get('/Berita/Berita-Kerjasama-Luar-Negeri', function () {
    return view('berita.beritaluarnegeri');
});

Route::get('/Berita/Artikel-Lainnya', function () {
    return view('berita.artikel');
});

Route::get('/Berita/F.A.Q', function () {
    return view('berita.faq');
});

/* Publikasi */

Route::get('/Publikasi/Materi-Materi', function () {
    return view('publikasi.materi');
});

Route::get('/Publikasi/e-Book', function () {
    return view('publikasi.ebook');
});

Route::get('/Publikasi/Brosur-event', function () {
    return view('publikasi.brosur');
});

Route::get('/Publikasi/Agenda', function () {
    return view('publikasi.agenda');
});

Route::get('/Publikasi/SK-Admin', function () {
    return view('publikasi.skadmin');
});

Route::get('/Publikasi/PPID', function () {
    return view('publikasi.ppid');
});

/* LPPD */

Route::get('/LPPD', function () {
    return view('lppd.lppd');
});

/* kemitraan */

Route::get('/tkksd/Mitra-Kerjasama-Dalam-Negeri', function () {
    return view('tkksd.mitradalamnegeri');
});

Route::get('/tkksd/Mitra-Kerjasama-Luar-Negeri', function () {
    return view('tkksd.mitraluarnegeri');
});

/* tkksd */

Route::get('/TKKSD', function () {
    return view('tkksd.tkksd');
});