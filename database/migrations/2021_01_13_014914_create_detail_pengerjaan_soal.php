<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengerjaanSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_pengerjaan_soal', function (Blueprint $table) {
            $table->id('id_detail_pengerjaan_soal');
            $table->integer('id_pengerjaan_soal');
            $table->integer('id_detail_soal');
            $table->string('pilihan_jawaban')->nullable();
            $table->text("jawaban_essay")->nullable();
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
        Schema::dropIfExists('detail_pengerjaan_soal');
    }
}
