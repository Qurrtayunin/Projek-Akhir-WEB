<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'id_booking';
    protected $fillable = [
        'id_customer, id_mobil, tanggal_pinjam, jadwal_kembali, tanggal_dikembalikan'
    ];
    public $timestamps = false;
}
