<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sites extends Model
{
    protected $table = 'sites';
    protected $fillable = [
        'thumb',
        'site_name',
        'location',
        'comdate',
        'pic', 'plan_id'
    ];
}
