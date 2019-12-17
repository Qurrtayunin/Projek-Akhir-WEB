<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    
    protected $fillable = [
    	'nama_kategori', 'nama_mobil', 'tahun_produksi', 'no_plat', 'warna',
    ];
    public $timestamps = false;
}
