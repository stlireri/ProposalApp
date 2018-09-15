<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerifyUser extends Model
{
    public function user(){
        return $this->belongdTo('App/User', 'user_id');
    }
}
