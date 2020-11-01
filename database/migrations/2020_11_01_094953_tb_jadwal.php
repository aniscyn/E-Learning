<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jadwal', function(Blueprint $table){
            $table->id('id_jadwal');
            $table->integer('id_guru');
            $table->integer('id_kelas');
            $table->integer('id_mapel');
            $table->integer('urutan_hari');
            $table->string('nama_hari', 10);
            $table->time('jm_mulai');
            $table->time('jm_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_jadwal');
    }
}
