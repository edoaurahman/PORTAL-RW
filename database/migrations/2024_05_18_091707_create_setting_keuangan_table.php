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
        Schema::create('setting_keuangan', function (Blueprint $table) {
            $table->id('id_setting_keuangan');
            $table->string('nama_setting', 50);
            $table->string('nilai_setting', 100);
            $table->string('keterangan', 100);
            $table->enum('status', ['active', 'inactive']);
            $table->string('created_by', 16);
            $table->string('updated_by', 16);
            $table->foreign('created_by')->references('nik')->on('tb_penduduk');
            $table->foreign('updated_by')->references('nik')->on('tb_penduduk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setting_keuangan');
    }
};
