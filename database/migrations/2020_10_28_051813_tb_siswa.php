<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function(Blueprint $table){
            $table->string('nis')->primary();
            $table->string('user_id');
            $table->string('kelas_id');
            $table->string('nm_lengkap', 50);
            $table->date('tgl_lahir');
            $table->string('jk', 10)->nullable();
            $table->text('alamat_siswa');
            $table->string('email' , 50)->nullable();
            $table->string('tlp', 13)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_siswa');
    }
}
