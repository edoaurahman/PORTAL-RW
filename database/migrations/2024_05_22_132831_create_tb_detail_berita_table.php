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
        Schema::create('tb_detail_berita', function (Blueprint $table) {
            $table->id('id_detail')->autoIncrement();
            $table->timestamps();
            $table->foreign('author', 'tb_berita_ibfk_2')->references('id_berita')->on('tb_berita');
            $table->foreign('author', 'tb_berita_ibfk_2')->references('id_kategori')->on('tb_kategori_berita');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_detail_berita');
    }
};
