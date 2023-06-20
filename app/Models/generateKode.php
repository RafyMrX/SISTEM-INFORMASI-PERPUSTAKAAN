<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class generateKode extends Model
{
	public function generate(){

		 $katalog = Buku::orderBy('id_katalog','desc')->first();

		if(empty($katalog)){
			$format = "K0001";
		}else{
			$kode = $katalog->id_katalog;
			$num = substr($kode, 1, 4);
			$add = (int) $num + 1;
			if(strlen($add) == 1){
				$format = "K000".$add;
			}else if(strlen($add) == 2){
				$format = "K00".$add;
			}
			else if(strlen($add) == 3){
				$format = "K0".$add;
			}else{
				$format = "K".$add;
			}

		}
		return $format;
	}

	public function KodeAnggota(){
		$anggota = Anggota::orderBy('id_anggota','desc')->first();

		if(empty($anggota)){
			$format = "A0001";
		}else{
			$kode = $anggota->id_anggota;
			$num = substr($kode, 1, 4);
			$add = (int) $num + 1;
			if(strlen($add) == 1){
				$format = "A000".$add;
			}else if(strlen($add) == 2){
				$format = "A00".$add;
			}
			else if(strlen($add) == 3){
				$format = "A0".$add;
			}else{
				$format = "A".$add;
			}

		}
		return $format;
	}

	public function KodePetugas(){
		$petugas = Petugas::orderBy('id_petugas','desc')->first();

		if(empty($petugas)){
			$format = "P0001";
		}else{
			$kode = $petugas->id_petugas;
			$num = substr($kode, 1, 4);
			$add = (int) $num + 1;
			if(strlen($add) == 1){
				$format = "P000".$add;
			}else if(strlen($add) == 2){
				$format = "A00".$add;
			}
			else if(strlen($add) == 3){
				$format = "P0".$add;
			}else{
				$format = "P".$add;
			}

		}
		return $format;
	}

	public function KodeTransaksi(){
		$transaksi = Peminjaman::orderBy('id_transaksi','desc')->first();

		if(empty($transaksi)){
			$format = "T0001";
		}else{
			$kode = $transaksi->id_transaksi;
			$num = substr($kode, 1, 4);
			$add = (int) $num + 1;
			if(strlen($add) == 1){
				$format = "T000".$add;
			}else if(strlen($add) == 2){
				$format = "T00".$add;
			}
			else if(strlen($add) == 3){
				$format = "T0".$add;
			}else{
				$format = "T".$add;
			}

		}
		return $format;
	}


}
