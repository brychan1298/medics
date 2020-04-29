<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aqueue extends Model
{
    protected $table = 'tbcheckup';
    protected $primaryKey = 'id';
    protected $fillable = ['appointment','disease','dokter','nohp','spesialist','date','nama','id_hospital','id_user','status'];
    public $timestamps = false;

    // public function users()
    // {
    //     return $this->belongsTo(Users::class , 'id_user');

    // }

    public function ahospital()
    {
        return $this->belongsTo(Users::class , 'id_hospital');
    }

    public function tbhospital()
    {
        return $this->belongsTo(ahospital::class , 'id_hospital');
    }
}
