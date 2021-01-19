<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Studnet extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'sname',
    ];


}
