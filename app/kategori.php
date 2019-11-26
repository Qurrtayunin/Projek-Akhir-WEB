<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'nama_kategori';
    protected $fillable = [
        'nama_kategori',
        'biaya_harian',
        'denda_perjam'
    ];
    // use SoftDeletes;
    public $timestamps = false;
}
