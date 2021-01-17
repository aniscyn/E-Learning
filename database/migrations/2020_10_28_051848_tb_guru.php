<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbGuru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_guru', function(Blueprint $table){
            $table->string('nip', 16)->primary();
            $table->string('user_id');
            $table->string('nm_lengkap', 50);
            $table->date('tgl_lahir');
            $table->string('jk', 10);
            $table->text('alamat_guru');
            $table->string('email', 50)->nullable();
            $table->string('tlp', 15)->nullable();
            $table->text('profile_photo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_guru');
    }
}
