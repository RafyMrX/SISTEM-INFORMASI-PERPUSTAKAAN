<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PeminjamanController extends PagesController
{
  // ADMIN
  public function index()
  {
    $pinjaman = Peminjaman::all();
    return view('admin.t_peminjaman.index', compact('pinjaman'));
  }

    // PUBLIC
  public function pinjamanPublic()
  {
    $peminjaman = new Peminjaman;
    $anggota = session()->get('SessionPublic');
    $pinjaman = Peminjaman::where('id_anggota', $anggota)->get();
    $jml = Peminjaman::where('id_anggota', $anggota)->count();

    foreach ($pinjaman as  $value) {

      if(date_create(date('Y-m-d')) > date_create($value->tgl_kembali)){
            // MODEL UNTUK PERHITUNGAN DENDA
        $denda =  $peminjaman->denda($value->tgl_kembali);

        Peminjaman::where('id_transaksi', $value->id_transaksi)->update([
          'denda' => $denda,
          'status' => 2
        ]);

      }else{
       Peminjaman::where('id_transaksi', $value->id_transaksi)->update([
        'denda' => 0
      ]);
     }

   }

   return view('public.akun.pinjaman', compact('pinjaman', 'jml'));
 }

    // PUBLIC
 public function pinjamPost(Request $request)
 {
   Peminjaman::create([
    'id_transaksi' => $request->input('kd_transaksi'),
    'id_katalog' => $request->input('id_katalog'),
    'id_anggota' => $request->input('id_anggota'),
    'id_petugas' => ' ',
    'tgl_pinjam' => $request->input('tgl_pinjam'),
    'tgl_kembali' => $request->input('tgl_kembali'),
    'denda' => 0,
    'status' => 1
  ]);

   return redirect('/pinjaman');

 }


   // PENGEMBALIAN 
 public function pengembalian($id){
  Peminjaman::where('id_transaksi', $id)->update([
    'status' => 3
  ]);
return redirect('/peminjaman')->with('kembali', 'Telah dikembalikan dan Status berubah menjadi dikembalikan');

}

// PERPANJANG
public function perpanjang($id){
    $kode = $id;
    return view("admin.t_peminjaman.perpanjang", compact('kode'));
}

public function perpanjangPost(Request $request){
    $kode = $request->input('kd_transaksi');
    $tgl = $request->input('tgl_kembali');
    $tgl_kembali = date('Y-m-d', strtotime($tgl));

    Peminjaman::where('id_transaksi', $kode)->update([
      'tgl_kembali' => $tgl_kembali,
      'status' => 1
    ]);

    return redirect('/peminjaman')->with('perpanjang', 'Telah diperpanjang dan Status berubah menjadi dipinjam dan tanggal pengembalian bertambah');
}


   // ADMIN & PUBLIC DELETE
public function destroy($id)
{
  Peminjaman::where('id_transaksi', $id)->delete();
  return back()->with('berhasil', 'Data Berhasil Dihapus');
}
}
