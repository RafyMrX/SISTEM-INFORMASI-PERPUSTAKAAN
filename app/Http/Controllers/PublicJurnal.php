<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Rak;
use App\Models\Peminjaman;
use App\Models\generateKode;
use Illuminate\Http\Request;

class PublicJurnal extends PagesController
{
	public function index(){
		$buku = Buku::where('id_kategori','4')->get();
		$jml = Buku::where('id_kategori','4')->count();
		return view('public.jurnal.index', compact('buku', 'jml'));
	}

	public function detail($id){
		$peminjaman = new Peminjaman;
		$kode = new generateKode;
		$kode = $kode->KodeTransaksi();
		$tgl_kembali = $peminjaman->ProsesTglKembaliJurnal();

		if(session()->has('SessionPublic')){
			$id_anggota = session()->get('SessionPublic');
			$buku = Buku::where('id_katalog',$id)->get();
			return view('public.jurnal.detail', compact('buku', 'tgl_kembali', 'id_anggota','kode'));
		}

		$buku = Buku::where('id_katalog',$id)->get();
		return view('public.jurnal.detail', compact('buku'));


	}
}
