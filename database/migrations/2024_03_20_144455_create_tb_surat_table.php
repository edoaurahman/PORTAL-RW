<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSuratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_surat', function (Blueprint $table) {
            $table->integer('id_surat')->primary();
            $table->string('nama_surat');
            $table->text('keterangan');
            $table->string('file', 50);
            $table->string('author', 16)->index();
            $table->timestamps();

            $table->foreign('author', 'tb_surat_ibfk')->references('nik')->on('tb_akun');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_surat');
    }
}
