<?php

namespace App\Http\Controllers;

use App\Models\Usulan;
use Illuminate\Http\Request;

class UsulanController extends PagesController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $usulan = Usulan::All();
        return view('admin.t_usulan.index', compact('usulan'));
    }

    public function show($id)
    {   
        $usulan = Usulan::where('id_usulan', $id)->get();

        return view('admin.t_usulan.view', compact('usulan'));
    }


    public function destroy($id)
    {
        Usulan::where('id_usulan', $id)->delete();
        return redirect('/usulan')->with('berhasil', ' ');
    }
}
