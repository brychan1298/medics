<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aproduk extends Model
{
    protected $table="tbproduk";
    protected $primaryKey="id";

    public function tbtransaksidetil()
    {
    	return $this->hasOne(Acustomer::class,'id');
    }
}
