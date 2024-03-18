<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPendudukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penduduk', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('nama', 100);
            $table->date('ttl');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama', 20);
            $table->enum('status_perkawinan', ['Kawin', 'Belum Kawin', 'Cerai', 'Cerai Mati']);
            $table->string('pekerjaan', 50);
            $table->string('gol_darah', 5);
            $table->integer('id_alamat');
            $table->string('no_kk', 16);
            $table->timestamps();

            $table->foreign('id_alamat', 'tb_penduduk_ibfk_2')->references('id_alamat')->on('tb_alamat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_penduduk');
    }
}
