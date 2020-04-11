<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spreker extends Model
{
    protected $fillable = ['name', 'description', 'website'];

    public function keywords(){
        return $this->belongsToMany('App\Keyword', 'spreker_keyword', 'spreker_id', 'keyword_id')->withTimestamps();
    }

    public function images(){
        return $this->hasMany('App\Image');
    }

    public function sessions(){
        return $this->hasMany('App\Sessie');
    }
}
