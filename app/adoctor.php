<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class adoctor extends Model
{
    protected $table = 'tbdokter';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','spesialisasi','nohp','email','alamat','tgl_mulai_kerja','kota','gambar'];
    public $timestamps = false;

    public function tbchosedoc()
    {
    	return $this->hasOne(Dokterhospital::class,'id');
    }
}
