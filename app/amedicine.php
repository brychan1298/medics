<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class amedicine extends Model
{
    protected $table = 'tbproduk';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','harga','img','kegunaan','tgl_expired','kategori','jumlah_stok'];
    public $timestamps = false;
}
