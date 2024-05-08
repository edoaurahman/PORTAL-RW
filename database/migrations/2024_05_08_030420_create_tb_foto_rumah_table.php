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
        Schema::create('tb_foto_rumah', function (Blueprint $table) {
            $table->integer('id_foto_rumah')->autoIncrement();
            $table->string('no_kk', 16)->index();
            $table->string('image', 255);
            $table->timestamps();

            $table->foreign('no_kk')->references('no_kk')->on('tb_kk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_foto_rumah');
    }
};
