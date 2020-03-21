<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acustomer extends Model
{
    protected $table="tbtransaksidetil";
    protected $primaryKey="id_transaksi";

    public function tbtransaksi()
    {
    	return $this->hasOne(Acheck::class,'id_transaksi');
    }
}
