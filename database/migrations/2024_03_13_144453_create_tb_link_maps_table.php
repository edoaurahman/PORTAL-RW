<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbLinkMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_link_maps', function (Blueprint $table) {
            $table->integer('id_link_maps')->autoIncrement();
            $table->string('nik', 16);
            $table->string('link');
            $table->timestamps();

            $table->foreign('nik', 'tb_link_maps_ibfk_1')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_link_maps');
    }
}
