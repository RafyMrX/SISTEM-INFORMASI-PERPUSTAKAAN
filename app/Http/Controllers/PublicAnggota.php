<?php

namespace App\Http\Controllers;
use App\Models\generateKode;
use App\Models\Anggota;
use Illuminate\Http\Request;

class PublicAnggota extends PagesController
{

    public function index(){
        $kode = new generateKode;
        $kd_anggota = $kode->KodeAnggota();
        return view('public/akun/register', compact('kd_anggota'));
    }


    public function RegisterPost(Request $request)
    {
        $request->validate([
            'no_identitas' => 'required',
            'jen_identitas' => 'required',
            'username' => 'required|alpha_dash',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'status' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'hubungan' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',

        ]);

        Anggota::create([
            'id_anggota' => $request->input('kd_anggota'),
            'jenis_identitas' => $request->input('jen_identitas'),
            'no_identitas' => $request->input('no_identitas'),
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'jekel' => $request->input('jenis_kelamin'),
            'status' => $request->input('status'),
            'pend_terakhir' => $request->input('pendidikan'),
            'pekerjaan' => $request->input('pekerjaan'),
            'sts_hubungan' => $request->input('hubungan'),
            'prov' => $request->input('provinsi'),
            'kot' => $request->input('kota'),
            'alamat' => $request->input('alamat')
        ]);

        return redirect('/pendaftaran-anggota')->with('berhasil', ' ');
    }

}
