<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_orders', function (Blueprint $table) {
            $table->id();
            $table->string('uid_order');
            $table->string("kode_order");
            $table->string('outlet_order');
            $table->string("nama_barang");
            $table->string('sisa_barang');
            $table->string('jumlah_order');
            $table->string('satuan');
            $table->string('status');
            $table->timestamps();
            // $table->foreign("nama_barang")->references('nama_barang')->on('barang_lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_orders');
    }
}
