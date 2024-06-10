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
        Schema::create('tb_bansos', function (Blueprint $table) {
            $table->integer('id_bansos')->autoIncrement();
            $table->string('no_kk', 16)->index();
            $table->tinyInteger('gaji');
            $table->tinyInteger('jumlah_tanggungan');
            $table->tinyInteger('luas_tanah');
            $table->tinyInteger('kapasitas_listrik');
            $table->tinyInteger('jumlah_kendaraan');
            $table->enum('status', ['pending', 'approved', 'rejected', 'done'])->default('pending');
            $table->text('alasan')->nullable();
            $table->timestamps();

            $table->foreign('no_kk')->references('no_kk')->on('tb_kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_bansos');
    }
};
