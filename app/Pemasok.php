<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasok extends Model
{
    protected $table = "pemasok";
    protected $fillable = ['kode_pemasok','nama_pemasok'];

    public function pemasok()
    {
        return $this->hasMany(Obat::class);
    }
}
