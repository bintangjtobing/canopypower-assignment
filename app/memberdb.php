<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class memberdb extends Model
{
    protected $table = 'memberdbs';
    protected $fillable = [
        'username',
        'password',
        'name',
    ];
}
