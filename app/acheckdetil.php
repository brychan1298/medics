<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class acheckdetil extends Model
{
    protected $table = 'tbprofile';
    protected $primaryKey='id_user';

    public function tbtransaksi()
    {
    	return $this->hasOne(Acheck::class,'id_user');
    }
}
