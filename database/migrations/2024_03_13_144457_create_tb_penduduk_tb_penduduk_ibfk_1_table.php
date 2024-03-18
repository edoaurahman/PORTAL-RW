<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPendudukTbPendudukIbfk1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tb_penduduk', function (Blueprint $table) {
            $table->foreign('no_kk', 'tb_penduduk_ibfk_1')->references('no_kk')->on('tb_kk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_penduduk', function (Blueprint $table) {
            $table->dropForeign('tb_penduduk_ibfk_1');
        });
    }
}
