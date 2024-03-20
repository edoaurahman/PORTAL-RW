<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alamat', function (Blueprint $table) {
            $table->integer('id_alamat')->primary();
            $table->string('nik', 16);
            $table->integer('rw');
            $table->integer('rt');
            $table->string('kel/desa', 50);
            $table->string('kecamatan', 50);
            $table->string('jalan', 50);
            $table->timestamps();

            $table->foreign('nik', 'tb_alamat_ibfk_1')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_alamat');
    }
}
