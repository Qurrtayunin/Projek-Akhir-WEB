<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    //opsional
    protected $PrimaryKey = 'id_pembayaran';
    protected $fillable = [
    	'id_booking', 'total', 'status', 'denda',
    ];
    public $timestamps = false;
}
