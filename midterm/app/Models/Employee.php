<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $table = 'employees';
    public $guarded = [];
    public $timestamps = false;
}
