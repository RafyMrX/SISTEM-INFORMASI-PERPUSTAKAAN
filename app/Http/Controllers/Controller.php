<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
	// Home
   public function Home(){
   		return view('public/home');
   }

    public function usulan(){
   		return view('public/usulan');
   }

    public function daftar(){
   		return view('public/akun/register');
   }

     public function kontak(){
   		return view('public/kontak');
   }

     public function about(){
   		return view('public/about');
   }


   // KOLEKSI 
   public function buku(){
   		return view('public/koleksi/buku');
   }
     public function majalah(){
   		return view('public/koleksi/majalah');
   }
     public function jurnal(){
   		return view('public/koleksi/majalah');
   }
     public function ebook(){
   		return view('public/koleksi/majalah');
   }
     public function comic(){
   		return view('public/koleksi/majalah');
   }
     public function novel(){
   		return view('public/koleksi/majalah');
   }




}
