<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    
    protected $table = 'profiles';
     
    protected $fillable = ['name','content','user_id'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
