<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aqueue extends Model
{
    protected $table = 'tbcheckup';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','disease','alamat','nohp'];
    public $timestamps = false;

     public function profile(){
        return $this->hasOne(Profile::class , 'id_user');
    }
}
