<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('uid_karyawan')->unique();
            $table->string('nama_karyawan');
            $table->string('penempatan');
            $table->string('domisili');
            $table->string('posisi');
            $table->string('t_masuk');
            $table->string('t_lahir');
            $table->string('no_hp');
            $table->string('poto');
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
        Schema::dropIfExists('karyawans');
    }
}
