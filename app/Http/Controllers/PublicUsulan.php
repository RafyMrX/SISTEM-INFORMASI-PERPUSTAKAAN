<?php

namespace App\Http\Controllers;
use App\Models\Usulan;
use Illuminate\Http\Request;

class PublicUsulan extends PagesController
{
	public function index(){
		return view('public/usulan');
	}

	public function PostUsulan(Request $request){
		$request->validate([
			'nama' => 'required',
			'email' => 'required|email|unique:usulan',
			'pekerjaan' => 'required',
			'tlp' => 'required',
			'jenis' => 'required',
			'judul' => 'required',
			'pengarang' => 'required',
			'penerbit' => 'required',
			'isbn' => 'required',
			'jml' => 'required'

		]);

		Usulan::create([
			'nama' => $request->input('nama'),
			'email' => $request->input('email'),
			'pekerjaan' => $request->input('pekerjaan'),
			'tlp' => $request->input('tlp'),
			'jenis_koleksi' => $request->input('jenis'),
			'judul' => $request->input('judul'),
			'pengarang' => $request->input('pengarang'),
			'penerbit' => $request->input('penerbit'),
			'isbn' => $request->input('isbn'),
			'jml' => $request->input('jml'),
			'tgl_usulan' => $request->input('tgl')
		]);

		return redirect('/usulan-koleksi')->with('berhasil', ' ');
	
	}

}
