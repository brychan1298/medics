<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aqueue extends Model
{
    protected $table = 'tbcheckup';
    protected $primaryKey = 'id';
    protected $fillable = ['appointment','disease','dokter','nohp','spesialist','date','nama','email'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(Users::class , 'id_user');

    }public function ahospital()
    {
        return $this->belongsTo(Users::class , 'id');
    }
}