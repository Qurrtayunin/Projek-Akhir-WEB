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
            $table->bigInteger('nama_kategori')->unsigned();
            $table->string('nama_mobil');
            $table->integer('tahun_produksi');
            $table->string('no_plat');
            $table->string('warna');
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
