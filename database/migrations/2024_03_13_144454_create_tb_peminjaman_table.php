<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_peminjaman', function (Blueprint $table) {
            $table->integer('id_peminjaman')->primary();
            $table->integer('id_inventaris');
            $table->string('nik', 16);
            $table->timestamps();

            $table->foreign('id_inventaris', 'tb_peminjaman_ibfk_1')->references('id_inventaris')->on('tb_inventaris');
            $table->foreign('nik', 'tb_peminjaman_ibfk_2')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_peminjaman');
    }
}
