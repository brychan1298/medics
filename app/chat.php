<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    protected $table = 'tbchat';
    public $timestamps = false;

    public function tbuser()
    {
    	return $this->belongsTo(Users::class , 'id_user');
    }
}
