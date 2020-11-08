<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbAbsen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_absen', function(Blueprint $table){
            $table->id('id_absen');
            $table->integer('id_user');
            $table->string('tipe', 10);
            $table->date('tanggal_absen');
            $table->timestamp('jm_masuk')->nullable();
            $table->timestamp('jm_keluar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
