<?php

namespace App\Http\Controllers;
use App\Models\generateKode;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class PetugasController extends PagesController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::All();
        return view('admin.m_petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = new generateKode;
        $kd_petugas = $kode->KodePetugas();
        return view('admin.m_petugas.tambah', compact('kd_petugas'));
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
            'nama' => 'required',
            'username' => 'required|alpha_dash',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required'

        ]);

        Petugas::create([
            'id_petugas' => $request->input('nip'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password'))

        ]);

        return redirect('/petugas')->with('berhasil', ' ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $petugas = Petugas::where('id_petugas', $id)->get();
        return view('admin.m_petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|alpha_dash'
        ]);

        Petugas::where('id_petugas', $request->input('nip'))->update([
                'nama' => $request->input('nama'),
                 'username' => $request->input('username')
        ]);

        return redirect('/petugas')->with('berhasil', ' ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        Petugas::where('id_petugas', $id)->delete();
        return redirect('/petugas')->with('berhasil', ' ');
    }
}
