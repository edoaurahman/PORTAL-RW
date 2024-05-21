<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_keuangan', function (Blueprint $table) {
            $table->integer('id_keuangan')->autoIncrement();
            $table->integer('jumlah');
            $table->string('no_kk', 16);
            $table->timestamps();

            $table->foreign('no_kk', 'tb_keuangan_ibfk_1')->references('no_kk')->on('tb_kk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_keuangan');
    }
}
