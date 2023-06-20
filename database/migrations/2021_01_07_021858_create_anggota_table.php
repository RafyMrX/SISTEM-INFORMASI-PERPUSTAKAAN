<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota', function (Blueprint $table) {
            $table->char('id_anggota',5)->unique();
            $table->string('jenis_identitas',100);
            $table->string('no_identitas',100);
            $table->string('nama',100);
            $table->string('username',100);
            $table->string('password',100);
            $table->string('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->char('jekel',1);
            $table->string('status',100);
            $table->string('pend_terakhir',100);
            $table->string('pekerjaan',100);
            $table->string('sts_hubungan',100);
            $table->string('prov',100);
            $table->string('kot',100);
            $table->string('alamat',100);
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
        Schema::dropIfExists('anggota');
    }
}
