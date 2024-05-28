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
        Schema::create('tb_pengeluaran', function (Blueprint $table) {
            $table->integer('id_pengeluaran')->autoIncrement();
            $table->integer('id_kategori');
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->timestamps();

            $table->foreign('id_kategori')->references('id_kategori')->on('tb_kategori_keuangan')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengeluaran');
    }
};
