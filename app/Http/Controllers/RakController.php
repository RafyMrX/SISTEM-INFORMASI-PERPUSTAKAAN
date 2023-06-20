<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends PagesController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rak = Rak::All();
        $count = Rak::All()->count();
        return view('admin.m_rak.index', compact('rak', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.m_rak.tambah');
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
            'nama' => 'required'
        ]);

        Rak::create([
            'nama_rak' => $request->input('nama')
        ]);

       return  redirect('/rak')->with('berhasil', ' ');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function show(Rak $rak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rak = Rak::where('id_rak',$id)->get();
        return view('admin.m_rak.edit', compact('rak'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Rak::where('id_rak',$request->input('id_rak'))
        ->update([
            'nama_rak' => $request->input('nama')
        ]);

        return  redirect('/rak')->with('berhasil', ' ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rak  $rak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Rak::where('id_rak', $id)->delete();
           return  redirect('/rak')->with('berhasil', ' ');
    }
}
