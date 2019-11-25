<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id_booking');
            $table->bigInteger('id_customer')->unsigned();
            $table->bigInteger('id_mobil')->unsigned();
            $table->date('tanggal_pinjam');
            $table->date('jadwal_kembali');
            $table->date('tanggal_dikembalikan');
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customer');
            $table->foreign('id_mobil')->references('id_mobil')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
