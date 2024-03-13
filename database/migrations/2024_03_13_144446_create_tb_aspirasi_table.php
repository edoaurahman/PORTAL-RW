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
            $table->integer('id_aspirasi')->primary();
            $table->string('judul');
            $table->string('author', 16);
            $table->text('isi');
            $table->string('dokumentasi', 50);
            $table->enum('status', ['Belum Ditanggapi', 'Sudah Ditanggapi']);
            $table->text('respon');
            
            $table->foreign('author', 'tb_aspirasi_ibfk_1')->references('nik')->on('tb_penduduk');
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
