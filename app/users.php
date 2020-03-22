<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $table = "tbuser";    
    protected $primaryKey = "id_user";
    public $timestamps = false;
    protected $hidden =['password'];

    public function aqueue(){
        return $this->hasOne(Aqueue::class , 'id_user');
    }
}
