<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_alamat', function (Blueprint $table) {
            $table->integer('id_alamat')->primary();
            $table->integer('rw');
            $table->integer('rt');
            $table->string('kel/desa', 50);
            $table->string('kecamatan', 50);
            $table->string('jalan', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_alamat');
    }
}
