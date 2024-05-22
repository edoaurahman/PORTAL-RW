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
            $table->integer('id_detail')->autoIncrement();
            $table->integer('id_berita')->index();
            $table->integer('id_kategori')->index();
            $table->timestamps();
            $table->foreign('id_berita')->references('id_berita')->on('tb_berita')->onDelete('cascade');
            $table->foreign('id_kategori')->references('id_kategori')->on('tb_kategori_berita')->onDelete('cascade');
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
