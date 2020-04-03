<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class users extends Authenticatable
{	   


    protected $table = "tbuser";    
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $hidden =['password'];

    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function aqueue(){
        return $this->hasOne(Aqueue::class , 'id');
    }

    public function acheck(){
        return $this->hasOne(Acheck::class , 'id');
    }
}
