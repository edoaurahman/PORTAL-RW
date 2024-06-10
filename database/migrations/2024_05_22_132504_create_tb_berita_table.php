<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_berita', function (Blueprint $table) {
            $table->integer('id_berita')->autoIncrement();
            $table->string('judul');
            $table->text('slug');
            $table->text('gambar');
            $table->text('isi');
            $table->integer('view')->default(0);
            $table->date('tanggal_posting');
            $table->string('author', 16);
            $table->enum('status', ['publish', 'pending', 'reject'])->default('pending');
            $table->timestamps();
            $table->foreign('author', 'tb_berita_ibfk_1')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_berita');
    }
};
