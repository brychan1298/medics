<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokterhospital extends Model
{
    protected $table = 'tb_dokter_hospital';
    

    public function tbdokter()
    {
    	return $this->belongsTo(Adoctor::class,'id_dokter');
    }

    public function tbhospital()
    {
    	return $this->belongsTo(Ahospital::class,'id_hospital');
    }
}
