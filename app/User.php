<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profiles(){
        return $this->hasOne('App\Profile')->withDefault();
    }
    
    public function reports(){
        return $this->hasMany('App\Report');
    }
    
    public function plans(){
        return $this->hasOne('App\Plan')->withDefault();
    }
}
