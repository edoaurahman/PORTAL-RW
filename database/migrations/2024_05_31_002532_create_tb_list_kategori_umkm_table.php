<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_list_kategori_umkm', function (Blueprint $table) {
            $table->integer('id_list_kategori_umkm')->autoIncrement();
            $table->integer('id_kategori');
            $table->integer('id_umkm');
            $table->foreign('id_umkm')->references('id_umkm')->on('tb_umkm')->cascadeOnDelete();
            $table->foreign('id_kategori')->references('id_kategori')->on('tb_kategori_umkm')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_list_kategori_umkm');
    }
};
