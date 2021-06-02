<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengadaanBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadaan_barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_vendor_list');
            $table->integer('id_pesan_barang');
            $table->string('status_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengadaan_barangs');
    }
}
