<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_akun', function (Blueprint $table) {
            $table->integer('id_akun')->autoIncrement();
            $table->string('username', 100);
            $table->string('password', 100);
            $table->integer('id_level');
            $table->rememberToken();
            $table->string('nik', 16)->index('nik');
            $table->timestamps();
            $table->foreign('id_level', 'tb_akun_ibfk_1')->references('id_level')->on('tb_level');
            $table->foreign('nik', 'tb_akun_ibfk_2')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_akun');
    }
}
