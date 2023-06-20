<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
	protected $table = "peminjaman";
	protected $guarded = ['created_ad', 'updated_ad'];


	public function ProsesTglKembaliBuku(){
		$pinjam         = date('Y-m-d');
		$tujuh_hari     = mktime(0,0,0,date("n"),date("j")+7,date("Y"));
		$kembali        = date("Y-m-d", $tujuh_hari);
		return $kembali;
	}

	public function ProsesTglKembaliMajalah(){
		$pinjam         = date('Y-m-d');
		$tujuh_haris     = mktime(0,0,0,date("n"),date("j")+4,date("Y"));
		$kembali        = date("Y-m-d", $tujuh_haris);
		return $kembali;
	}

	public function ProsesTglKembaliJurnal(){
		$pinjam         = date('Y-m-d');
		$tujuh_hari     = mktime(0,0,0,date("n"),date("j")+2,date("Y"));
		$kembali        = date("Y-m-d", $tujuh_hari);
		return $kembali;
	}

	

	public function denda($kembali, $pinjam){

		// Menentukan Denda
		$denda = 2000;
		
		$k = date_create($kembali); 
		$curdate = date_create(date('Y-m-d')); 
		$terlambat = date_diff($k, $curdate);
		$hari = $terlambat->format("%a"); 
		$hasil =   $denda * $hari;

		return $hasil;

	}

	public function buku()
	{
		return $this->belongsTo(Buku::class, 'id_katalog', 'id_katalog');
	}

}
