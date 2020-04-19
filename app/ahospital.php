<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ahospital extends Model
{
    protected $table = 'tbhospital';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','img','provinsi','kota','alamat','nohp'];
    public $timestamps = false;

    public function aqueue(){
        return $this->hasOne(Aqueue::class , 'id');
    }

    public function tbchosehos()
    {
    	return $this->hasOne(Dokterhospital::class,'id');
    }
}
