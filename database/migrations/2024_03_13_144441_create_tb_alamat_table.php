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
            $table->integer('id_alamat')->autoIncrement();
            $table->integer('rw');
            $table->integer('rt');
            $table->string('kel', 50);
            $table->string('kecamatan', 50);
            $table->string('jalan', 50);
            $table->timestamps();
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
