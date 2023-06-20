<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends PagesController
{
     public function index(){
     $anggota = Anggota::All();
     return view('admin.m_anggota.index', compact('anggota'));
    }

 
 public function show($id)
 {
 	$anggota = Anggota::where('id_anggota', $id)->get();
     return view('admin.m_anggota.view', compact('anggota'));
 }


 public function destroy($id)
 {

        Anggota::where('id_anggota', $id)->delete();
        return redirect('/anggota')->with('berhasil', ' ');
 }

}
