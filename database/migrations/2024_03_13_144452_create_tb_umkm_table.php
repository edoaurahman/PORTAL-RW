<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUmkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_umkm', function (Blueprint $table) {
            $table->integer('id_umkm')->primary();
            $table->string('nama_umkm', 100);
            $table->string('deskripsi', 300);
            $table->integer('id_kategori_umkm');
            $table->string('nik', 16);
            $table->timestamps();

            $table->foreign('nik', 'tb_umkm_ibfk_1')->references('nik')->on('tb_penduduk');
            $table->foreign('id_kategori_umkm', 'tb_umkm_ibfk_2')->references('id_kategori')->on('tb_kategori_umkm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_umkm');
    }
}
