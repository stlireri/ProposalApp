<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'title', 'organization_name', 'address', 'phone',
        'email', 'submited_by', 'pro_summary', 'prop_background', 'activities', 'budget'

    ];
}
