<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = "tbcart";
    protected $fillable = ['id_user','id_produk','jlh'];
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function tbproduk()
    {
    	return $this->belongsTo(Aproduk::class,'id_produk');
    }
}
