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
            $table->integer('id_umkm')->autoIncrement();
            $table->string('nama_umkm', 100);
            $table->text('deskripsi');
            $table->string('cover', 1000);
            $table->string('hari', 200);
            $table->time('jam_buka');
            $table->time('jam_tutup');
            $table->enum('status', ['publish', 'pending', 'reject'])->default('pending');
            $table->string('nik', 16);
            $table->integer('view')->default(0);
            $table->timestamps();

            $table->foreign('nik', 'tb_umkm_ibfk_1')->references('nik')->on('tb_penduduk');
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
