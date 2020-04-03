<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acustomer extends Model
{
    protected $table="tbtransaksidetil";
    protected $primaryKey="id_transaksi";
    
    protected $fillable = ['id_transaksi','id_produk','jumlah'];
    public $timestamps = false;

    public function tbtransaksi()
    {
    	return $this->belongsTo(Acheck::class,'id_transaksi');
    }

    public function tbproduk()
    {
    	return $this->belongsTo(Aproduk::class,'id_produk');
    }
}
