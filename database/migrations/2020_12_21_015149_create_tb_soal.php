<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_soal', function (Blueprint $table) {
            $table->id('id_soal');
            $table->string('nama_soal');
            $table->integer('jumlah_soal')->default(0);
            $table->integer('id_jadwal')->nullable();
            $table->integer('id_materi')->nullable();
            $table->boolean('is_uts')->default(0);
            $table->boolean('is_uas')->default(0);
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
        Schema::dropIfExists('tb_soal');
    }
}
