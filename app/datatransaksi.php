<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datatransaksi extends Model
{
    protected $table = "tbdatatransaksi";
    protected $fillable = ['id_transaksi','city','name','email','address','notes'];
    public $timestamps = false;
}
