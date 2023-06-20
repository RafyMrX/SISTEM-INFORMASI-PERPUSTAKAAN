<?php

namespace App\Http\Controllers;
use App\Models\Petugas;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends PagesController
{	

	// LOGIN ADMIN
    public function PostAdminLogin(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');
        $petugas = Petugas::where('username', $username)->first();

        if($petugas){
           if(Hash::check($password, $petugas->password)){
            $request->session()->put('SessionAdmin', $petugas->nama);
            return redirect('/dashboard');
        }
        else{
           return back()->with('gagal', ' ') ;
       }
   }else{
       return back()->with('gagal', ' ') ;
   }

}

public function LogoutAdmin(){
    session()->forget('SessionAdmin');
    return redirect('/admin');            
}


    // LOGIN PUBLIC

public function getlogin(){

    return view('public.akun.login');            
}

public function PostPublicLogin(Request $request){

    $username = $request->input('username');
    $password = $request->input('password');
    $anggota = Anggota::where('username', $username)->first();

    if($anggota){
        if(Hash::check($password, $anggota->password)){
            $request->session()->put('SessionPublic', $anggota->id_anggota);
            $request->session()->put('SessionNama', $anggota->nama);
            $anggota = session()->get('SessionPublic');
            return redirect('/');
        }else{
            return back()->with('gagal', 'Username / Password Salah');
        }
    }else{
        return back()->with('gagal', 'Username / Password Salah');
    }
}


public function LogoutPublic(){
    session()->forget('SessionPublic');
    session()->forget('SessionNama');
    return back();            
}


}
