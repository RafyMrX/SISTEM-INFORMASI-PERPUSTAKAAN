<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsulanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usulan', function (Blueprint $table) {
            $table->increments('id_usulan');
            $table->String('nama',200);
            $table->String('email')->unique();
            $table->String('pekerjaan',50);
            $table->char('tlp',12);
            $table->String('jenis_koleksi',50);
            $table->String('judul',200);
            $table->String('pengarang',200);
            $table->String('penerbit',200);
            $table->String('isbn',200);
            $table->String('tgl_usulan', 200);
            $table->integer('jml');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usulan');
    }
}
