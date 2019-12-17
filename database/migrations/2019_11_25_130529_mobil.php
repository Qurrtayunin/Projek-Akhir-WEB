<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mobil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobil', function (Blueprint $table) {
            $table->bigIncrements('id_mobil');
            $table->String('nama_kategori')->unsigned()->nullable();
            $table->String('nama_mobil');
            $table->integer('tahun_produksi');
            $table->String('no_plat');
            $table->String('warna');
            $table->timestamps();

            $table->foreign('nama_kategori')->references('nama_kategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mobil');
    }
}
