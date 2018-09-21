<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'title', 'address', 'phone',
        'email', 'pro_summary', 'pro_background', 'activities', 'budget'

    ];
    public function proposals(){
        $this->belongsTo($user_id);
    }
}
