<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crud1s extends Model
{
    protected $fillable=[
         'name',
         'dob',
         'address',
         'email',
         'mobile'
    ];
}