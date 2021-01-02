<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSoal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detail_soal', function (Blueprint $table) {
            $table->id('id_detail_soal');
            $table->integer('id_soal');
            $table->string('type')->default('pg');
            $table->text('pertanyaan');
            $table->text('pilihan_a')->nullable();
            $table->text('pilihan_b')->nullable();
            $table->text('pilihan_c')->nullable();
            $table->text('pilihan_d')->nullable();
            $table->text('pilihan_e')->nullable();
            $table->text('jawaban_pilihan')->nullable();
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
        Schema::dropIfExists('detail_soal');
    }
}
