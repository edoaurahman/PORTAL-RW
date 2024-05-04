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
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('agama', 20);
            $table->enum('status_perkawinan', ['Kawin', 'Belum Kawin', 'Cerai', 'Cerai Mati']);
            $table->string('pekerjaan', 50);
            $table->string('gol_darah', 5);
            $table->string('no_kk', 16);
            $table->string('no_hp', 13)->nullable();
            $table->integer('id_alamat');
            $table->enum('status_penduduk', ['Pendatang', 'Penduduk Tetap']);
            $table->timestamps();

            // foreign key id_alamat
            $table->foreign('id_alamat')->references('id_alamat')->on('tb_alamat')->onDelete('cascade');
            // foreign key no_kk
            $table->foreign('no_kk')->references('no_kk')->on('tb_kk');
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
