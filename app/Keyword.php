<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{

    protected $fillable = ['name'];

    public function sprekers(){
        return $this->belongsToMany('App\Spreker', 'spreker_keyword', 'keyword_id', 'spreker_id')->withTimestamps();
    }

}
