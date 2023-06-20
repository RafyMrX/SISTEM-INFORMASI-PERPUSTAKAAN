<?php

namespace Database\Seeders;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = array(
    		array(3,'Majalah'),
    		array(4,'Jurnal'),
    		array(6,'Buku')
    	);

    	for ($baris=0; $baris < count($data); $baris++) { 
    			Kategori::create([
    				'id_kategori' => $data[$baris][0],
    				'nama_kategori' => $data[$baris][1]
    			]);
    	}

    }
}
