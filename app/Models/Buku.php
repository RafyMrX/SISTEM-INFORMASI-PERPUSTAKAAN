<?php

namespace App\Models;
use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
	protected $table= 'katalog';

	protected $fillable = ['id_katalog', 'id_kategori', 'id_rak', 'gambar', 'judul', 'pengarang', 'isbn', 'penerbit', 'jumlah', 'deskripsi'];

	public function kategori()
	{
		return $this->belongsTo(kategori::class, 'id_kategori', 'id_kategori');
	}

	public function rak()
	{
		return $this->belongsTo(Rak::class, 'id_rak', 'id_rak');
	}



}
