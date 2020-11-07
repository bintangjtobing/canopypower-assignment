<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class plan extends Model
{
    protected $table = 'plans';
    protected $fillable = [
        'plan_name',
        'plan_color',
    ];
}
