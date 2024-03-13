<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLinkUmkmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_link_umkm', function (Blueprint $table) {
            $table->integer('id_umkm');
            $table->string('nama', 100);
            $table->string('link', 100);
            
            $table->foreign('id_umkm', 'tb_link_umkm_ibfk_1')->references('id_umkm')->on('tb_umkm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_link_umkm');
    }
}
