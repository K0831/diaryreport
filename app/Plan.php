<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table='plans';
    
    protected $fillable = ['mon_t','tue_t','wed_t','thu_t','fri_t','sat_t','sun_t',
                           'mon_c','tue_c','wed_c','thu_c','fri_c','sat_c','sun_c'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
