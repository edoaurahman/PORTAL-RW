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
            $table->enum('kelayakan_rumah', ['Tidak Layak', 'Layak', 'Sangat Layak']);
            $table->enum('pendapatan', ['Kurang dari 1 Juta', '1 Juta - 2 Juta', 'Lebih dari 2 Juta']);
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
