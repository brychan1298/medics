<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acheck extends Model
{
    protected $table = 'tbtransaksi';
    protected $primaryKey='id_user';

    public function tbprofile()
    {
    	return $this->hasOne(Acheckdetil::class,'id_user');
    }

    public function tbtransaksidetil()
    {
    	return $this->belongsTo(Acustomer::class,'id_transaksi');
    }
}
