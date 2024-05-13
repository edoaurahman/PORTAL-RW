<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->integer('id_berita')->autoIncrement();
            $table->string('judul');
            $table->text('slug');
            $table->text('gambar');
            $table->text('isi');
            $table->date('tanggal_posting');
            $table->string('author', 16);
            $table->enum('status', ['publish', 'pending', 'reject'])->default('pending');
            $table->timestamps();
            $table->foreign('author', 'tb_berita_ibfk_1')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_berita');
    }
}
