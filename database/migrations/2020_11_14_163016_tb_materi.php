<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbMateri extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_materi', function(Blueprint $table){
            $table->integer('id_materi')->autoIncrement();
            $table->integer('id_jadwal');
            $table->string('nm_materi', 50);
            $table->string('js_materi', 15);
            $table->text('rs_materi');
            $table->string('keterangan', 50)->nullable();
            $table->string('upload_materi', 12);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_materi');
    }
}
