<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = "tbprofile";    
    protected $primaryKey = "id_user";
    public $timestamps = false;

    public $incrementing = false;

    public function aqueue(){
        return $this ->belongsTo(Aqueue::class,'id_user');
    }
}
