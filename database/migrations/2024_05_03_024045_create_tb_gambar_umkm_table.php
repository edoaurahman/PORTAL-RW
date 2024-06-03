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
        Schema::create('tb_gambar_umkm', function (Blueprint $table) {
            $table->integer('id_gambar_umkm')->autoIncrement();
            $table->string('gambar', 100);
            $table->enum('position', ['slide', 'content']);
            $table->integer('id_umkm');
            $table->foreign('id_umkm')->references('id_umkm')->on('tb_umkm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_gambar_umkm');
    }
};
