<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAspirasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_aspirasi', function (Blueprint $table) {
            $table->integer('id_aspirasi')->autoIncrement();
            $table->string('author', 16);
            $table->text('isi');
            $table->enum('status', ['pending', 'done'])->default('pending');
            $table->text('respon')->nullable();
            $table->timestamps();

            $table->foreign('author', 'tb_aspirasi_ibfk_1')->references('nik')->on('tb_penduduk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_aspirasi');
    }
}
