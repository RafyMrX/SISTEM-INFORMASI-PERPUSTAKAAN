<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\generateKode;
use Illuminate\Http\Request;

class PublicBuku extends PagesController
{
	public function index(){
		$buku = Buku::where('id_kategori','6')->get();
		$jml = Buku::where('id_kategori','6')->count();
		return view('public.buku.index', compact('buku', 'jml'));
	}

	public function detail($id){
		$peminjaman = new Peminjaman;
		$kode = new generateKode;
		$kode = $kode->KodeTransaksi();
		$tgl_kembali = $peminjaman->ProsesTglKembaliBuku();

		if(session()->has('SessionPublic')){
			$id_anggota = session()->get('SessionPublic');
			$buku = Buku::where('id_katalog',$id)->get();
			return view('public.buku.detail', compact('buku', 'tgl_kembali', 'id_anggota','kode'));
			}

		$buku = Buku::where('id_katalog',$id)->get();
		return view('public.buku.detail', compact('buku'));


	}
}
