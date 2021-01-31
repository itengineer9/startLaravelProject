<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['firstName', 'lastName']; // wie ist in der DatenBank
    protected $hidden=['created_at','updated_at'];
}
