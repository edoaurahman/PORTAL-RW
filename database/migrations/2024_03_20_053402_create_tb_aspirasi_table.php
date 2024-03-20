<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_aspirasi', function (Blueprint $table) {
            $table->integer('id_aspirasi')->autoIncrement();
            $table->string('judul');
            $table->string('author', 16);
            $table->text('isi');
            $table->string('dokumentasi', 50);
            $table->enum('status', ['Belum Ditanggapi', 'Sudah Ditanggapi'])->default('Belum Ditanggapi');
            $table->text('respon')->nullable();
            $table->integer('id_kategori');
            $table->timestamps();

            $table->foreign('author', 'tb_aspirasi_ibfk_1')->references('nik')->on('tb_penduduk');
            $table->foreign('id_kategori', 'tb_aspirasi_ibfk_2')->references('id_kategori')->on('tb_kategori_aspirasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_aspirasi');
    }
}
