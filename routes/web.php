<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\PinjamController;

// Pages Controller Umum
Route::get('/',[Controller::class, 'Home']);
Route::get('/usulan-koleksi',[Controller::class, 'usulan']);
Route::get('/pendaftaran-anggota',[Controller::class, 'daftar']);
Route::get('/hubungi-kami',[Controller::class, 'kontak']);
Route::get('/tentang-kami',[Controller::class, 'about']);

// Pages Controller Koleksi Buku
Route::get('/koleksi-buku',[Controller::class, 'buku']);
Route::get('/koleksi-majalah',[Controller::class, 'majalah']);
Route::get('/koleksi-jurnal',[Controller::class, 'jurnal']);
Route::get('/koleksi-ebook',[Controller::class, 'ebook']);
Route::get('/koleksi-komik',[Controller::class, 'komik']);
Route::get('/koleksi-novel',[Controller::class, 'novel']);


// Controller Untuk Proses
Route::get('/detail-buku',[DetailController::class, 'show']);
Route::get('/pinjaman',[PinjamController::class, 'index']);

