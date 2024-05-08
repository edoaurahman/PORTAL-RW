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
        Schema::create('tb_foto_bansos', function (Blueprint $table) {
            $table->integer('id_foto_rumah');
            $table->integer('id_bansos')->index();
            $table->string('foto_rumah', 255);
            $table->timestamps();

            $table->foreign('id_bansos')->references('id_bansos')->on('tb_bansos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_foto_bansos');
    }
};
