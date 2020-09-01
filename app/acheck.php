<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acheck extends Model
{
    protected $table = 'tbtransaksi';
    protected $primaryKey='id_transaksi';
    protected $fillable = ['id_user','tanggal','total','img','status','kirim'];
    public $timestamps = false;

    public function tbprofile()
    {
    	return $this->belongsTo(Acheckdetil::class,'id_user');
    }

    public function tbtransaksidetil()
    {
    	return $this->hasOne(Acustomer::class,'id_transaksi');
    }

    public function tbuser()
    {
        return $this->belongsTo(Users::class,'id_user');
    }
}
