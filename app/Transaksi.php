<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksi";
    protected $fillable = ['kode_transaksi','obat_id','nama_kasir','jumlah_beli','total_harga','tanggal_beli'];

}
