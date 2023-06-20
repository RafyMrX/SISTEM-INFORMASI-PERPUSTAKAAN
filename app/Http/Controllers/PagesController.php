<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PagesController
{

	// PAGES CONTROLLER ADMIN 
  public function home(){
   return view("admin.index");
 }


 public function cari(Request $request){

  $request->validate([
    'jenis_koleksi' => 'required',
    'kriteria' => 'required',
    'kunci' => 'required'
  ]);

  $jenis_koleksi = $request->input('jenis_koleksi');
  $kriteria = $request->input('kriteria');
  $kunci = $request->input('kunci');

  $data = Buku::where('id_kategori', 'LIKE', '%'.$jenis_koleksi.'%')
  ->where($kriteria, 'LIKE', '%'.$kunci.'%')->get();

  $jml = $data->count();

  return view('public.cari', compact('data', 'jml', 'jenis_koleksi'));
}



public function dashboard(){
  $buku = Buku::where('id_kategori','6')->count();
  $majalah = Buku::where('id_kategori','3')->count();
  $jurnal = Buku::where('id_kategori','4')->count();
  return view("admin.home", compact('buku', 'majalah', 'jurnal'));
}

 // PAGES CONTROLLER PUBLIC 
public function publics(){
  $kategori = Kategori::all();
 return view("public.home", compact('kategori'));
}



public function kontak(){
 return view('public/kontak');
}

public function about(){
 return view('public/about');
}

}
