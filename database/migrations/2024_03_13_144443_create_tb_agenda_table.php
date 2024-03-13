<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_agenda', function (Blueprint $table) {
            $table->integer('id_agenda')->primary();
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->string('author', 16);
            
            $table->foreign('author', 'tb_agenda_ibfk_1')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_agenda');
    }
}
