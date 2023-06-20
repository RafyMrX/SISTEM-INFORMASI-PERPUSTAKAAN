<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Rak;
use App\Models\Kategori;
use App\Models\generateKode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $katalog = Buku::All();
        $count = Kategori::All()->count();

        return view("admin.m_buku.index", compact('katalog','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {           
        $generateKode = new generateKode();
        $kode =  $generateKode->generate();
        
        // DB KATEAGORI
        $kategori = Kategori::All();
        // DB RAK
        $rak = Rak::All();

        return view('admin.m_buku.tambah', compact('kode','kategori', 'rak'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $request->validate([
        'judul' => 'required',
        'pengarang' => 'required',
        'isbn' => 'required',
        'penerbit' => 'required',
        'jumlah' => 'required',
        'desc' => 'required',
        'kategori' =>'required',
        'rak' =>'required',
    ]);


       Buku::create([
        'id_katalog' => $request->input('kode'),
        'id_kategori' => $request->input('kategori'),
        'id_rak' => $request->input('rak'),
        'judul' => $request->input('judul'),
        'gambar' => $request->file('cover')->store('image'),
        'pengarang' => $request->input('pengarang'),
        'isbn' => $request->input('isbn'),
        'penerbit' => $request->input('penerbit'),
        'jumlah' => $request->input('jumlah'),
        'deskripsi' => $request->input('desc'),
    ]);

       return redirect('/katalog')->with('berhasil',' ');



   }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           // DB KATEAGORI
        $kategori = Kategori::All();
        // DB RAK
        $rak = Rak::All();
        $katalog = Buku::where('id_katalog', $id)->get();
        return view("admin.m_buku.edit", compact('katalog', 'rak', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'isbn' => 'required',
            'penerbit' => 'required',
            'jumlah' => 'required',
            'desc' => 'required',
            'kategori' =>'required',
            'rak' =>'required',
        ]);

        if($request->file('cover')){
            $gambar = $request->file('cover')->store('image');
            $data = Buku::where('id_katalog', $request->input('kode'))->first();
            if(!empty($data->gambar)){
             $test = Storage::delete($data->gambar);
             $hasil = $gambar;
             Buku::where('id_katalog', $request->input('kode'))
             ->update([
                'id_katalog' => $request->input('kode'),
                'id_kategori' => $request->input('kategori'),
                'id_rak' => $request->input('rak'),
                'judul' => $request->input('judul'),
                'gambar' => $hasil ,
                'pengarang' => $request->input('pengarang'),
                'isbn' => $request->input('isbn'),
                'penerbit' => $request->input('penerbit'),
                'jumlah' => $request->input('jumlah'),
                'deskripsi' => $request->input('desc'),
            ]);   
         }else{
               $hasil = $gambar;
               Buku::where('id_katalog', $request->input('kode'))
        ->update([
        'id_katalog' => $request->input('kode'),
        'id_kategori' => $request->input('kategori'),
        'id_rak' => $request->input('rak'),
        'judul' => $request->input('judul'),
        'gambar' => $hasil ,
        'pengarang' => $request->input('pengarang'),
        'isbn' => $request->input('isbn'),
        'penerbit' => $request->input('penerbit'),
        'jumlah' => $request->input('jumlah'),
        'deskripsi' => $request->input('desc'),
        ]);          
        }
    }else{
        $data = Buku::where('id_katalog', $request->input('kode'))->first();
        Buku::where('id_katalog', $request->input('kode'))
        ->update([
        'id_katalog' => $request->input('kode'),
        'id_kategori' => $request->input('kategori'),
        'id_rak' => $request->input('rak'),
        'judul' => $request->input('judul'),
        'gambar' => $data->gambar ,
        'pengarang' => $request->input('pengarang'),
        'isbn' => $request->input('isbn'),
        'penerbit' => $request->input('penerbit'),
        'jumlah' => $request->input('jumlah'),
        'deskripsi' => $request->input('desc'),
        ]);     
    }



      return redirect('/katalog')->with('berhasil',' ');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::where('id_katalog',$id)->delete();
        return redirect('/katalog')->with('berhasil',' ');
    }
}
