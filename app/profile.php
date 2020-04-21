<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'tbprofile';
    protected $primaryKey = 'id_user';
    protected $fillable = ['id_user','nama','tanggal_lahir','alamat','no_hp'];
    public $timestamps = false;
}
