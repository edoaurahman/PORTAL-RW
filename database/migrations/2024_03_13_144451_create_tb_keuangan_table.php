<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_keuangan', function (Blueprint $table) {
            $table->integer('id_keuangan')->primary();
            $table->integer('jumlah');
            $table->enum('status', ['Lunas', 'Belum Lunas']);
            $table->string('nik', 16);
            $table->integer('id_kategori_keuangan');
            $table->date('tgl_bayar');
            $table->timestamps();

            $table->foreign('nik', 'tb_keuangan_ibfk_1')->references('nik')->on('tb_penduduk');
            $table->foreign('id_kategori_keuangan', 'tb_keuangan_ibfk_2')->references('id_kategori')->on('tb_kategori_keuangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_keuangan');
    }
}
