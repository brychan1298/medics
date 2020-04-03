<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acheckdetil extends Model
{
    protected $table = 'tbprofile';
    protected $primaryKey='id_user';
    protected $fillable = ['id_transaksi','id_produk','jumlah'];
    public $timestamps = false;

    public function tbtransaksi()
    {
    	return $this->hasOne(Acheck::class,'id_user');
    }
}
