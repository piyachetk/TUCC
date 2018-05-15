<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Member extends Model {

    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'prefix',
        'firstName',
        'lastName',
        'level',
        'class',
        'number',
        'status'
    ];
}