<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

    protected $fillable = ['name', 'src'];

    public function spreker(){
        return $this->belongsTo('App\Spreker');
    }

}
