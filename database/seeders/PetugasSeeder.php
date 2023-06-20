<?php
namespace Database\Seeders;
use App\Models\Petugas;
use App\Models\generateKode;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $kode = new generateKode;
       	 $kd_petugas = $kode->KodePetugas();

       	  Petugas::create([
            'id_petugas' => $kd_petugas,
            'nama' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin')

        ]);

    }
}
