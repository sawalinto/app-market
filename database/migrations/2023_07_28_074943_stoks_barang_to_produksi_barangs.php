<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StoksBarangToProduksiBarangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produksi_barangs', function (Blueprint $table) {
            $table->string('stok_barang')->after('nama_Barang');
            $table->string('jumlah_stok')->after('jumlah_produksi');
            $table->string('keterangan')->before('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produksi_barangs', function (Blueprint $table) {
            //
        });
    }
}
