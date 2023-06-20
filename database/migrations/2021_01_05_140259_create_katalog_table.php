<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katalog', function (Blueprint $table) {
            $table->char('id_katalog',5)->unique();
            $table->integer('id_kategori');
            $table->integer('id_rak');
            $table->text('gambar');
            $table->string('judul',200);
            $table->string('pengarang', 200);
            $table->string('isbn',200);
            $table->string('penerbit',200);
            $table->string('jumlah',200);
            $table->text('deskripsi');
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
        Schema::dropIfExists('katalog');
    }
}
