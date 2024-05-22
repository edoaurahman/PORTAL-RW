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
        Schema::create('tb_gambar_berita', function (Blueprint $table) {
            $table->id('id_gambar_berita');
            $table->string('gambar', 50);
            $table->integer('id_berita')->index();
            $table->timestamps();

            $table->foreign('id_berita')->references('id_berita')->on('tb_berita')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_gambar_berita');
    }
};
