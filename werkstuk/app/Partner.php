<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = ['name', 'type', 'level', 'website', 'img', 'imgname'];
}
