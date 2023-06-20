<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UsulanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\PublicBuku;
use App\Http\Controllers\PublicJurnal;
use App\Http\Controllers\PublicMajalah;
use App\Http\Controllers\PublicPinjaman;
use App\Http\Controllers\PublicUsulan;
use App\Http\Controllers\PublicAnggota;
use App\Http\Controllers\AuthController;

// ROUTE PUBLIC
// ==================================================================
Route::get('/',[PagesController::class, 'publics']);

Route::get('/cari',[PagesController::class, 'cari']);

Route::get('/hubungi-kami',[PagesController::class, 'kontak']);
Route::get('/tentang-kami',[PagesController::class, 'about']);

// LOGIN 
Route::get('/login',[AuthController::class, 'getlogin'])->middleware('LoginUser');
Route::get('/logoutpublic',[AuthController::class, 'LogoutPublic']);
Route::post('/login/post',[AuthController::class, 'PostPublicLogin']);

// PENDAFTARAN
Route::get('/pendaftaran-anggota',[PublicAnggota::class, 'index']);
Route::post('/pendaftaran-anggota/kirim',[PublicAnggota::class, 'RegisterPost']);

// USULAN KOLEKSI
Route::get('/usulan-koleksi',[PublicUsulan::class, 'index']);
Route::post('/usulan-koleksi/kirim',[PublicUsulan::class, 'PostUsulan']);

// BUKU 
Route::get('/buku',[PublicBuku::class, 'index']);
Route::get('/buku/{id}',[PublicBuku::class, 'detail']);

// MAJALAH 
Route::get('/majalah',[PublicMajalah::class, 'index']);
Route::get('/majalah/{id}',[PublicMajalah::class, 'detail']);

// JURNAL
Route::get('/jurnal',[PublicJurnal::class, 'index']);
Route::get('/jurnal/{id}',[PublicJurnal::class, 'detail']);

// PINJAMAN
Route::get('/pinjaman',[PeminjamanController::class, 'pinjamanPublic'])->middleware('AlreadyLoginUser');
// POST PINJAM
Route::post('/pinjaman/buku',[PeminjamanController::class, 'pinjamPost']);
Route::post('/pinjaman/jurnal',[PeminjamanController::class, 'pinjamPost']);
Route::post('/pinjaman/majalah',[PeminjamanController::class, 'pinjamPost']);
Route::delete('/pinjaman/{id}',[PeminjamanController::class, 'destroy']);


// END PUBLIC =================================================



// ROUTE ADMIN  
// =================================================

// LOGIN
Route::get('/admin',[PagesController::class, 'home'])->middleware('AlreadyLoginAdmin');
Route::post('/admin/login',[AuthController::class, 'PostAdminLogin']);

// LOGOUT
Route::get('/logout',[AuthController::class, 'LogoutAdmin']);

// AFTER LOGIN ADMIN
Route::get('/dashboard',[PagesController::class, 'dashboard'])->middleware('LoginAdmin'); 


// ROUTE MASTER BUKU
Route::get('/katalog',[BukuController::class, 'index'])->middleware('LoginAdmin');
Route::get('/katalog/tambah',[BukuController::class, 'create'])->middleware('LoginAdmin');
Route::get('/katalog/{id}',[BukuController::class, 'edit'])->middleware('LoginAdmin');
Route::delete('/katalog/{id}',[BukuController::class, 'destroy']);
Route::post('/katalog/edit',[BukuController::class, 'update']);
Route::post('/katalog/tambah',[BukuController::class, 'store']);

// ROUTE MASTER KATEGORI
Route::get('/kategori',[KategoriController::class, 'index'])->middleware('LoginAdmin');
Route::get('/kategori/tambah',[KategoriController::class, 'create'])->middleware('LoginAdmin');
Route::get('/kategori/{id}',[KategoriController::class, 'edit'])->middleware('LoginAdmin');
Route::post('/kategori/edit',[KategoriController::class, 'update']);
Route::delete('/kategori/{id}',[KategoriController::class, 'destroy']);
Route::post('/kategori/tambah',[KategoriController::class, 'store']);

// ROUTE MASTER RAK
Route::get('/rak',[RakController::class, 'index'])->middleware('LoginAdmin');
Route::get('/rak/tambah',[RakController::class, 'create'])->middleware('LoginAdmin');
Route::get('/rak/{id}',[RakController::class, 'edit'])->middleware('LoginAdmin');
Route::delete('/rak/{id}',[RakController::class, 'destroy']);
Route::post('/rak/edit',[RakController::class, 'update']);
Route::post('/rak/tambah',[RakController::class, 'store']);

// ROUTE MASTER ANGGOTA
Route::get('/anggota',[AnggotaController::class, 'index'])->middleware('LoginAdmin');
Route::get('/anggota/{id}',[AnggotaController::class, 'show'])->middleware('LoginAdmin');
Route::delete('/anggota/{id}',[AnggotaController::class, 'destroy']);

// ROUTE MASTER PETUGAS
Route::get('/petugas',[PetugasController::class, 'index'])->middleware('LoginAdmin');
Route::get('/petugas/tambah',[PetugasController::class, 'create'])->middleware('LoginAdmin');
Route::post('/petugas/tambah',[PetugasController::class, 'store']);
Route::post('/petugas/edit',[PetugasController::class, 'update']);
Route::delete('/petugas/{id}',[PetugasController::class, 'destroy']);
Route::get('/petugas/{id}',[PetugasController::class, 'edit'])->middleware('LoginAdmin');

// ROUTE MASTER USULAN
Route::get('/usulan',[UsulanController::class, 'index'])->middleware('LoginAdmin');
Route::get('/usulan/{id}',[UsulanController::class, 'show'])->middleware('LoginAdmin');
Route::delete('/usulan/{id}',[UsulanController::class, 'destroy']);

// ROUTE TRANSAKSI PEMINJAMAN
Route::get('/peminjaman',[PeminjamanController::class, 'index'])->middleware('LoginAdmin');
Route::get('/kembali/{id}',[PeminjamanController::class, 'pengembalian']);
Route::get('/perpanjangan/{id}',[PeminjamanController::class, 'perpanjang']);
Route::post('/perpanjangan/post',[PeminjamanController::class, 'perpanjangPost']);



