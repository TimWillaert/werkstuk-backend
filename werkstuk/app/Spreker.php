<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spreker extends Model
{
    protected $fillable = ['name', 'description', 'website'];
}
