<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksiBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produksi_barangs', function (Blueprint $table) {
            $table->id();
            $table->string("uid_produksi");
            $table->string("kode_outlet");
            $table->string("nama_Barang");
            $table->string("jumlah_produksi");
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
        Schema::dropIfExists('produksi_barangs');
    }
}
